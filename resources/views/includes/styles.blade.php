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

.weather-content {
    position: relative;
    z-index: 1;
    background: white;
    padding: 20px;
    border-radius: 10px;
    text-align: left;
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
}

.weather-container {
    display: flex;
    flex-wrap: nowrap; /* alapból egysoros */
    justify-content: space-around;
    align-items: stretch;
    flex-direction: row;
    width: 100%;
    max-width: 900px;
    margin: 20px auto;
    padding: 15px;
    border: 2px solid #007bff;
    border-radius: 10px;
    background-color: #f8f9fa;
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
}

.weather-box {
    flex: 1 1 200px;
    text-align: center;
    padding: 10px;
    border-right: 1px solid #ddd;
    box-sizing: border-box;
}

.weather-box:last-child {
    border-right: none;
}

.weather-title {
    font-size: 18px;
    font-weight: bold;
    margin-bottom: 5px;
}

.weather-value {
    font-size: 16px;
    font-weight: normal;
}


.forecast-row,
.sun-row {
    display: flex;
    flex-wrap: nowrap;
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

  .collapse-box {
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.4s ease;
}

.collapse-box.show {
  max-height: 1000px; /* elég nagy, hogy megmutassa a tartalmat */
}


</style>


