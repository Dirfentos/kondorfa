<div class="container mt-4">
    <div class="d-flex align-items-center">
        <button class="btn btn-outline-primary btn-sm me-2" onclick="prevMonth()">⬅</button>
        <h5 id="currentMonth" class="mb-0"></h5>
    </div>

    <div class="border p-2 mt-2" style="width: 200px; height: 200px; overflow: hidden;">
        <table class="table table-bordered text-center m-0">
            <thead class="table-light">
                <tr>
                    <th>H</th>
                    <th>K</th>
                    <th>Sz</th>
                    <th>Cs</th>
                    <th>P</th>
                    <th>Sz</th>
                    <th>V</th>
                </tr>
            </thead>
            <tbody id="calendar-body"></tbody>
        </table>
    </div>
</div>

<script>
    let currentDate = new Date();

    function renderCalendar() {
        const monthNames = ["Jan", "Feb", "Már", "Ápr", "Máj", "Jún", "Júl", "Aug", "Szept", "Okt", "Nov", "Dec"];
        const year = currentDate.getFullYear();
        const month = currentDate.getMonth();
        document.getElementById("currentMonth").innerText = `${monthNames[month]} ${year}`;

        const firstDay = new Date(year, month, 1).getDay();
        const lastDate = new Date(year, month + 1, 0).getDate();

        let days = [];
        let row = [];
        let startDay = (firstDay === 0) ? 6 : firstDay - 1;

        for (let i = 0; i < startDay; i++) {
            row.push("");
        }

        for (let day = 1; day <= lastDate; day++) {
            row.push(day);
            if (row.length === 7) {
                days.push(row);
                row = [];
            }
        }

        if (row.length > 0) {
            while (row.length < 7) {
                row.push("");
            }
            days.push(row);
        }

        let calendarHTML = "";
        days.forEach(week => {
            calendarHTML += "<tr>";
            week.forEach(day => {
                calendarHTML += `<td style="font-size: 12px;">${day || ""}</td>`;
            });
            calendarHTML += "</tr>";
        });

        document.getElementById("calendar-body").innerHTML = calendarHTML;
    }

    function prevMonth() {
        currentDate.setMonth(currentDate.getMonth() - 1);
        renderCalendar();
    }

    document.addEventListener("DOMContentLoaded", renderCalendar);
</script>
