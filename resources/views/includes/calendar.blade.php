<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<style>
#calendar {
    width: 100%;
    max-width: 700px;
    background: #fff;
    border-radius: 10px;
    border: 2px solid #007bff;
    box-shadow: 0 4px 6px rgba(0,0,0,0.1);
    padding: 20px;
}
.calendar-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 15px;
}

#calendar-title {
    font-size: 1.5rem;
    font-weight: bold;
}

.calendar-grid {
    display: grid;
    grid-template-columns: repeat(7, 1fr);
    gap: 6px;
}
    .day {
        padding: 5px;
        border: 1px solid #ccc;
        min-height: 30px;
        position: relative;
    }
    .event-marker {
        width: 5px;
        height: 5px;
        background-color: red;
        border-radius: 50%;
        position: absolute;
        bottom: 2px;
        right: 2px;
    }

    .calendar-wrapped {
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 20px;
    width: 100%;
}

.day-name {
    padding: 5px;
    font-weight: bold;
    background-color: #e5e5e5;
    border-bottom: 1px solid #ccc;
}

.calendar-grid .day-name {
    background-color: #e9f3ff;
    font-weight: bold;
}

.calendar-grid .has-event {
    background: linear-gradient(to bottom, #cce5ff 20%, white 20%);
    border: 2px solid #007bff;
}

.has-event {
    background-color: #cce5ff; /* világoskék */
    border: 1px solid #007bff;
    position: relative;
}


.has-event::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    height: 5px;
    width: 100%;
    background-color: #007bff;
    transition: background-color 0.3s;
}

.has-event:hover::after {
    background-color: #0056b3;
}

#event-details ul {
    list-style: none;
    padding: 0;
}
#event-details li {
    margin-bottom: 10px;
}

.event-meeting {
    background-color: #f1f1f1; /* szürke */ 
}
.event-sport {
    background-color: #d4edda; /* zöld */
}
.event-holiday {
    background-color: #f8d7da; /* piros */
}
.event-default {
    background-color: #cce5ff; /* kék */
}

@media (max-width: 768px) {
    #calendar-title {
        font-size: 1.2rem;
    }

    .calendar-grid .day,
    .calendar-grid .day-name {
        padding: 6px;
        font-size: 12px;
        min-width: 40px; /* ➕ ne nyomódjon össze túlságosan */
        min-height: 40px;
    }
}

@media (max-width: 500px) {
    .calendar-grid {
        grid-template-columns: repeat(7, 1fr);
    }

    .calendar-grid .day,
    .calendar-grid .day-name {
        font-size: 10px;
        padding: 4px;
        min-height: 36px;
    }

    #calendar-title {
        font-size: 1.1rem;
    }

    .calendar-header .btn {
        padding: 2px 8px;
        font-size: 12px;
    }
}


@media (min-width: 769px) and (max-width: 992px) {
    .calendar-grid {
        grid-template-columns: repeat(7, minmax(0, 1fr)); /* oszlopok zsugorodhatnak */
    }

    .calendar-grid .day,
    .calendar-grid .day-name {
        font-size: 13px;
        padding: 6px;
        min-width: 30px;
    }

    #calendar-title {
        font-size: 1.3rem;
    }
}

@media (max-width: 458px) {
    .calendar-grid {
        grid-template-columns: repeat(7, minmax(0, 1fr));
        gap: 4px;
    }

    .calendar-grid .day,
    .calendar-grid .day-name {
        font-size: 9px;
        padding: 3px;
        min-height: 28px;
        line-height: 1.1;
    }

    #calendar-title {
        font-size: 1rem;
    }

    .calendar-header .btn {
        font-size: 11px;
        padding: 2px 6px;
    }

    .has-event::after {
        height: 4px;
    }
}

@media (max-width: 420px) {
    .calendar-grid {
        grid-template-columns: repeat(7, auto); /* minden oszlop a tartalomhoz igazodik */
        justify-content: center; /* középre igazítja a rácsot */
        gap: 2px;
    }

    .calendar-grid .day,
    .calendar-grid .day-name {
        width: 28px;
        height: 28px;
        font-size: 11px;
        padding: 0;
        line-height: 28px;
        text-align: center;
    }

    .has-event::after {
        height: 3px;
    }

    #calendar-title {
        font-size: 1rem;
    }

    .calendar-header {
        flex-direction: column;
        gap: 6px;
    }
}

@media (max-width: 404px) {
    .calendar-grid {
        grid-template-columns: repeat(7, auto);
        justify-content: center;
        gap: 1.5px;
    }

    .calendar-grid .day,
    .calendar-grid .day-name {
        width: 24px;
        height: 24px;
        font-size: 9px;
        padding: 0;
        line-height: 24px;
        text-align: center;
    }

    .has-event::after {
        height: 2px;
    }

    #calendar-title {
        font-size: 0.95rem;
    }

    .calendar-header .btn {
        font-size: 10px;
        padding: 2px 5px;
    }
}

@media (max-width: 390px) {
    .calendar-grid {
        display: none;
    }

    .day-list {
        display: block;
    }
}

.day-list {
    list-style: none;
    background-color: #f2f2f2;
    padding: 0;
    margin: 0;
}

.day-list li {
    padding: 6px 10px;
    border-bottom: 1px solid #ccc;
    font-size: 14px;
    display: flex;
    justify-content: space-between;
}

.day-list li.has-event {
    background-color: #e6f2ff;
    border-left: 4px solid #007bff;
    font-weight: bold;
}





</style>
<div class="collapse-box mt-3" id="naptarCollapse">
<div class="calendar-wrapped">
<div id="calendar">
    <div class="calendar-header">
        <button class="btn" onclick="prevMonth()">⬅</button>
        <span id="calendar-title"></span>
        <button class="btn" onclick="nextMonth()">➡</button>
    </div>
    <div class="calendar-grid" id="calendar-grid"></div>
    <ul class="day-list" id="day-list"></ul>

</div>
</div>
</div>

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

    // Napok nevei
    weekDays.forEach(day => {
        calendarGrid.append(`<div class="day-name"><strong>${day}</strong></div>`);
    });

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

</script>