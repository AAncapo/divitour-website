<form class="container p-2 rounded" action="<?php echo $base_url . 'pages/product-search.php'?>" method="get" style="background-color: #ffffffcc; pointer-events:all">
    <div class="d-block d-md-flex gap-4 bg-light m-0 rounded align-items-center p-3">
        <div class="col">
            <label for="destInput" class="form-label">DESTINATION</label>
                <select
                    class="form-select form-select-lg align-items-center"
                    name="destId"
                    id="destInput"
                    style="height: 38px; font-size: 16px;"
                >
                    <option selected value="">Select a destination</option>
                    <option value="havana,Havana">Havana</option>
                    <option value="varadero,Varadero">Varadero</option>
                    <option value="jibacoa,Jibacoa">Jibacoa</option>
                    <option value="cayolargo,Cayo Largo del Sur">Cayo Largo del Sur</option>
                    <option value="guillermo,Cayo Guillermo">Cayo Guillermo</option>
                    <option value="trinidad,Trinidad">Trinidad</option>
                    <option value="stlucia,Santa Lucia">Santa Lucia</option>
                    <option value="zapata,Peninsula de Zapata">Peninsula de Zapata</option>
                </select>
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