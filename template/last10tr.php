<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-body">
                <?php
                    require_once ("template/PrintData.php");
                    $print = new PrintData();
                    $print->select();
                    $print->generate("Ultimele 10 Tranzactii");
                ?>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                Sidebar
            </div>
        </div>

    </div>

</div>