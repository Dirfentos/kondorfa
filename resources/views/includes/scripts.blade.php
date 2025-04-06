{{--Kezdőoldal kép/szöveg --}}

<script>
    document.addEventListener("DOMContentLoaded", function () {
    const imageArea = document.querySelector('.position-relative');
    const overlay = document.getElementById('overlay');
    const textOverlay = document.getElementById('text-overlay');

    if (imageArea && overlay && textOverlay) {
        imageArea.addEventListener('mouseenter', () => {
            setTimeout(() => {
                overlay.style.visibility = 'visible';
                textOverlay.style.visibility = 'visible';
                overlay.style.opacity = '1';
                textOverlay.style.opacity = '1';
            }, 500);
        });

        imageArea.addEventListener('mouseleave', () => {
            overlay.style.opacity = '0';
            textOverlay.style.opacity = '0';
            overlay.style.visibility = 'hidden';
            textOverlay.style.visibility = 'hidden';
        });
    } else {
        console.warn("Figyelmeztetés: Az imageArea, overlay vagy textOverlay elem nem található.");
    }
});
</script>

{{-- Kép lapozása --}}

<script>
document.addEventListener('DOMContentLoaded', function () {
    let images = document.querySelectorAll('.modal-image');
    let modalImage = document.getElementById('modalImage');
    let prevButton = document.getElementById('prevButton');
    let nextButton = document.getElementById('nextButton');
    let currentIndex = 0;

    if (images.length === 0 || !modalImage) {
        console.warn("Figyelmeztetés: Nincsenek képek vagy a modális ablak nem található.");
        return;
    }

    // Képre kattintva betöltjük a modális ablakba
    images.forEach((img, index) => {
        img.addEventListener('click', function () {
            let imageSrc = this.getAttribute('data-image');
            modalImage.setAttribute('src', imageSrc);
            currentIndex = index;
        });
    });

    // Előző kép megjelenítése
    if (prevButton) {
        prevButton.addEventListener('click', function () {
            if (currentIndex > 0) {
                currentIndex--;
                modalImage.setAttribute('src', images[currentIndex].getAttribute('data-image'));
            }
        });
    } else {
        console.warn("Figyelmeztetés: A prevButton elem nem található.");
    }

    // Következő kép megjelenítése
    if (nextButton) {
        nextButton.addEventListener('click', function () {
            if (currentIndex < images.length - 1) {
                currentIndex++;
                modalImage.setAttribute('src', images[currentIndex].getAttribute('data-image'));
            }
        });
    } else {
        console.warn("Figyelmeztetés: A nextButton elem nem található.");
    }
});
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

{{--Kezdőoldal/Gombok --}}

<script>
    let currentYear = new Date().getFullYear();
    let currentMonth = new Date().getMonth() + 1;

    function loadCalendar(year, month) {
    const monthNames = [
        "január", "február", "március", "április", "május", "június",
        "július", "augusztus", "szeptember", "október", "november", "december"
    ];
    $("#calendar-title").text(`${year}. ${monthNames[month - 1]}`);

    const isMobile = window.innerWidth <= 768;

    const weekDays = isMobile
        ? ["H", "K", "Sz", "Cs", "P", "Sz", "V"]
        : ["Hétfő", "Kedd", "Szerda", "Csütörtök", "Péntek", "Szombat", "Vasárnap"];

    let daysInMonth = new Date(year, month, 0).getDate();
    let firstDay = new Date(year, month - 1, 1).getDay();

    const calendarGrid = $("#calendar-grid");
    calendarGrid.empty();


    // Üres napok a hónap elején
    for (let i = 0; i < (firstDay === 0 ? 6 : firstDay - 1); i++) {
        calendarGrid.append('<div class="day"></div>');
    }

    // Napok generálása
    for (let day = 1; day <= daysInMonth; day++) {
        calendarGrid.append(`<div class="day" id="day-${day}" data-day="${day}">${day}</div>`);
    }

    // Események betöltése
    $.get(`/events/${year}/${month}`, function(events) {
    events.forEach(event => {
        const eventDay = new Date(event.event_date).getDate();
        const typeClass = `event-${event.type || 'default'}`;
        $(`#day-${eventDay}`).addClass(typeClass);
    });

    // Naplista nézet feltöltése kis kijelzőkhöz
    const dayList = $("#day-list");
    dayList.empty();

    for (let day = 1; day <= daysInMonth; day++) {
        const id = `day-${day}`;
        const cell = $(`#${id}`);
        const hasEvent = cell.hasClass("event-default") || cell.hasClass("event-meeting") || cell.hasClass("event-sport") || cell.hasClass("event-holiday");

        const listItem = $(`<li class="${hasEvent ? 'has-event' : ''}" data-day="${day}">
                                <span>${day}. nap</span>
                                ${hasEvent ? '<span>📌</span>' : ''}
                            </li>`);
        dayList.append(listItem);
    }

    // Napra kattintás (rácsos nézet)
    $(".day").off("click").on("click", function () {
        const selectedDay = $(this).data("day");
        const formattedDay = `${currentYear}-${String(currentMonth).padStart(2, '0')}-${String(selectedDay).padStart(2, '0')}`;

        $.get(`/events/${currentYear}/${currentMonth}`, function(events) {
            const dayEvents = events.filter(event => event.event_date === formattedDay);

            if (dayEvents.length > 0) {
                let msg = `${formattedDay} eseményei:\n\n`;
                dayEvents.forEach(ev => {
                    msg += `• ${ev.title}\n${ev.description ? ev.description + '\n' : ''}\n`;
                });
                alert(msg);
            }
        });
    });

    // Naplista kattintás (mobilnézet)
    $(".day-list li").off("click").on("click", function () {
        const selectedDay = $(this).data("day");
        const formattedDay = `${currentYear}-${String(currentMonth).padStart(2, '0')}-${String(selectedDay).padStart(2, '0')}`;

        $.get(`/events/${currentYear}/${currentMonth}`, function(events) {
            const dayEvents = events.filter(event => event.event_date === formattedDay);

            if (dayEvents.length > 0) {
                let msg = `${formattedDay} eseményei:\n\n`;
                dayEvents.forEach(ev => {
                    msg += `• ${ev.title}\n${ev.description ? ev.description + '\n' : ''}\n`;
                });
                alert(msg);
            } else {
                alert(`${formattedDay}-re nincs esemény.`);
            }
        });
    });
});



// ⛔ Ha visszaváltunk nagy nézetre, rejtse el a naplistát
if (window.innerWidth > 390) {
    $("#day-list").hide();       // elrejti
} else {
    $("#day-list").show();       // újra megjeleníti kis nézetben
}



}  

    function prevMonth() {
        if (currentMonth === 1) {
            currentMonth = 12;
            currentYear--;
        } else {
            currentMonth--;
        }
        loadCalendar(currentYear, currentMonth);
    }

    function nextMonth() {
        if (currentMonth === 12) {
            currentMonth = 1;
            currentYear++;
        } else {
            currentMonth++;
        }
        loadCalendar(currentYear, currentMonth);
    }

    $(document).ready(() => {
        loadCalendar(currentYear, currentMonth);
    });

    window.addEventListener('resize', () => {
    loadCalendar(currentYear, currentMonth);
});

    document.addEventListener("DOMContentLoaded", function () {
      const weatherBtn = document.getElementById('toggleWeatherBtn');
      const calendarBtn = document.getElementById('toggleCalendarBtn');
      const weatherBox = document.getElementById('idojarasCollapse');
      const calendarBox = document.getElementById('naptarCollapse');
    
      weatherBtn.addEventListener('click', function () {
        weatherBox.classList.toggle('show');
      });
    
      calendarBtn.addEventListener('click', function () {
        calendarBox.classList.toggle('show');
      });
    });
    </script>
  


  


