<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<style>
    #calendar {
        width: 800px;
        height: 400px;
        background-color: white;
        border: 1px solid #ddd;
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
</style>

<div id="calendar">
    <div class="calendar-header">
        <button onclick="prevMonth()">⬅</button>
        <span id="calendar-title"></span>
        <button onclick="nextMonth()">➡</button>
    </div>
    <div class="calendar-grid" id="calendar-grid"></div>
</div>

<script>
    let currentYear = new Date().getFullYear();
    let currentMonth = new Date().getMonth() + 1;

    function loadCalendar(year, month) {
        $("#calendar-title").text(`${year} - ${month}`);

        let daysInMonth = new Date(year, month, 0).getDate();
        let firstDay = new Date(year, month - 1, 1).getDay();

        let calendarGrid = $("#calendar-grid");
        calendarGrid.empty();

        // Üres helyek a hónap első napja előtt
        for (let i = 0; i < firstDay; i++) {
            calendarGrid.append('<div class="day"></div>');
        }

        // Napok generálása
        for (let day = 1; day <= daysInMonth; day++) {
            calendarGrid.append(`<div class="day" id="day-${day}">${day}</div>`);
        }

        // Események betöltése
        $.get(`/api/events/${year}/${month}`, function(events) {
            events.forEach(event => {
                let eventDay = new Date(event.event_date).getDate();
                $(`#day-${eventDay}`).append('<div class="event-marker"></div>');
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