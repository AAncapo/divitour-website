<form class="container p-2 rounded" action="<?php echo $base_url . 'pages/booking.php'?>" method="get" style="background-color: #ffffffcc; pointer-events:all">
    <div class="d-block d-md-flex gap-4 bg-light m-0 rounded align-items-center p-3">
        <div class="col">
            <label for="destInput" class="form-label">DESTINATION</label>
            <input class="form-control" name="destination" list="destOptions" id="destInput" placeholder="Type your Destination...">
            <datalist id="destOptions">
                <option value="Havana">
                <option value="Varadero">
                <option value="Jibacoa">
                <option value="Cayo Largo del Sur">
                <option value="Cayo Guillermo">
                <option value="Santa Lucia">
                <option value="Trinidad">
                <option value="Peninsula de Zapata">
            </datalist>
        </div>
        <div class="col">
            <label for="dateInput" class="form-label" name="date">DATE</label>
            <input id="dateInput" type="date" class="form-control">
        </div>
        <div class="col">
            <div class="row">
                <div class="col">
                    <label for="adultsInput" class="form-label">ADULTS</label>
                    <input id="adultsInput" type="number" class="form-control" name="adults" min="1" value="1">
                </div>
                <div class="col">
                    <label for="kidsInput" class="form-label">KIDS</label>
                    <input id="kidsInput" type="number" class="form-control" name="kids" min="0" value="0">
                </div>
            </div>
        </div>
        <div class="col m-2">
            <button type="submit" class="btn btn-danger w-100 fs-5 fw-semibold p-3">SEARCH</button>
        </div>
    </div>
</form>

<style>
    label {
        margin-bottom: 4px;
        color: gray;
        font-size: .7rem;
        font-weight: bold;
        letter-spacing: .5px;
        transition: all .1s;
        &:active {
            color: var(--darkblue-color);
        }
    }
    input {
        color: red;
        font-size: .7rem;
        font-weight: bold;
    }
</style>