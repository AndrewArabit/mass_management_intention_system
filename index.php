<?php 
    require_once "config/mass_intentions.php";
    require_once "layout/header.php";


    $actions = new MassIntentions();

    if(isset($_POST['action'])) {
        switch ($_POST['action']) {
            case "AddIntention":
                $result = $massIntentions->addMassIntention($_POST);
            break;
        }
    }
?>


<div class="card">
    <div class="card-header">
      <h4 class="card-title">Add Intentions</h3>
    </div>
    <div class="card-body">

        <div class="row">
            <div class="col-lg-12">
                <div class="form-group">
                    <label for="usr">Intention Type:</label>
                    <input type="text" class="form-control" id="intention">
                </div>
            </div>
            <div class="col-lg-12">
                <button class="btn btn-success" id = "save-mass-intention"> Save Mass Intention</button>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th> Intention</th>
                            <th> Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Intentions</td>
                            <td>Action</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        
    </div>
</div>

<script>
    $(document).ready(function () {
        $('#example').DataTable();
    });

    $('#save-mass-intention').click(function() {
        let url = "<?= BASE_URL ?>mass_intentions/addMassIntention";
        let intention = $('#intention').val();
        let valid = true;

        let data = {
            action : "AddIntention",
            intention: intention
        }

        if (intention.length == 0) {
            valid = false;
            alert('Intention cannot be empty');
        }

        if (valid) {
            $.post(url, data).done(function(res){

            });
        }
    });

</script>

<?php require_once "layout/footer.php";?>