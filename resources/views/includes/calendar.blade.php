<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<style>
    #calendar {
        width: 800px;
        height: 450px;
        background-color: #f8f9fa;
        border: 2px solid #007bff;
        border-radius: 10px;
        padding: 10px;
        text-align: center;
    }
    .calendar-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        font-weight: bold;
    }
    .calendar-grid {
        display: grid;
        grid-template-columns: repeat(7, 1fr);
        gap: 2px;
        margin-top: 10px;
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

    .calendar-wrapper {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh;
}

.day-name {
    padding: 5px;
    font-weight: bold;
    background-color: #e5e5e5;
    border-bottom: 1px solid #ccc;
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


</style>
<div class="calendar-wrapped">
<div id="calendar">
    <div class="calendar-header">
        <button class="btn" onclick="prevMonth()">⬅</button>
        <span id="calendar-title"></span>
        <button class="btn" onclick="nextMonth()">➡</button>
    </div>
    <div class="calendar-grid" id="calendar-grid"></div>
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


        let daysInMonth = new Date(year, month, 0).getDate();
        let firstDay = new Date(year, month - 1, 1).getDay();

        let calendarGrid = $("#calendar-grid");
        calendarGrid.empty();

        const weekDays = ["Hétfő", "Kedd", "Szerda", "Csütörtök", "Péntek", "Szombat", "Vasárnap"]; // magyar rövidítések
weekDays.forEach(day => {
    calendarGrid.append(`<div class="day-name"><strong>${day}</strong></div>`);
});


        // Üres helyek a hónap első napja előtt
        for (let i = 0; i < firstDay; i++) {
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
});


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
</script>