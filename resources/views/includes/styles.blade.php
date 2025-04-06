<style>
    @import 'bootstrap/dist/css/bootstrap.css';

body {
    display: flex;
    flex-direction: column;
    min-height: 100vh;
}

.navbar-toggler {
  border-color: rgba(255, 255, 255, 0.7); /* ha kell keret is */
}

.navbar-toggler-icon {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%28255, 255, 255, 1%29' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
}

.content {
    flex: 1; 
}

/*Időjárás jelentés*/

.today-weather-box {
    display: flex;
    align-items: center;
    gap: 1rem;
    background-color: #f0f8ff;
    padding: 1rem 1.5rem;
    border-radius: 10px;
    border: 2px solid #007bff;
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    max-width: 500px;
    margin: 0 auto;
    font-size: 18px;
}

.weather-icon img {
    width: 64px;
    height: 64px;
}

.weather-info {
    flex: 1;
}

.temp-range {
    font-weight: bold;
}

.description {
    font-style: italic;
    color: #007bff;
}

.sun-times {
    font-size: 14px;
    color: #555;
}

@media (max-width: 767px) {
    .forecast-row,
    .sun-row {
        flex-wrap: wrap;
    }

    .forecast-box,
    .sun-box {
        flex: 1 1 100%;
    }
}

@media (min-width: 768px) and (max-width: 1199px) {
    .forecast-row {
        flex-wrap: wrap;
    }

    .forecast-box {
        flex: 1 1 33.33%;
    }

    .sun-row {
        flex-wrap: wrap;
    }

    .sun-box {
        flex: 1 1 50%;
    }
}

/* Helytörténet */

@media (max-width: 992px) {
    .responsive-img {
      max-width: 120px;
      height: auto;
    }
  }

  @media (max-width: 768px) {
    .responsive-img {
      max-width: 90px;
      height: auto;
    }
  }
  
  @media (max-width: 480px) {
    .responsive-img {
      max-width: 60px;
      height: auto;
    }
  }
  
.position-relative {
    position: relative;
}

.position-relative:hover #overlay,
.position-relative:hover #text-overlay {
    display: block;
    visibility: hidden;
    transition: opacity 0.5s ease-in-out, visibility 0s 0.5s;
    opacity: 0;           
}

.position-relative:hover #overlay,
.position-relative:hover #text-overlay {
    opacity: 1;
    visibility: visible;
    transition: opacity 0.5s ease-in-out, visibility 0s 0s; 
}

#overlay, #text-overlay {
    visibility: hidden;
    opacity: 0;
}

.hero-box {
    height: 300px;
  }
  
  @media (max-width: 992px) {
    .hero-box {
        height: 200px;
    }
  }
  
  @media (max-width: 767px) {
    .hero-box {
        height: 150px;
    }
  }
  
  
  #text-overlay {
    font-size: 76px;
  }
  
  @media(max-width: 992px) {
    #text-overlay {
      font-size: 48px !important;
    }
  }
  
  @media(max-width: 600px) {
    #text-overlay {
      font-size: 40px !important;
    }
  }

/* Naptár */

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


