<?php
include('common/head.php');
include('common/sidebar.php');
include('common/connection.php');

if (isset($_REQUEST['AddService'])) {
        $service_name=$_REQUEST['ServiceName'];
        $service_image=$_REQUEST['ServiceImage'];
        $package_limit=$_REQUEST['PackageLimit'];
        $packageslug=$_REQUEST['PackageSlug'];
        echo $insert_service= 'insert into tbl_services(fsServiceName,fsServiceImage, fiPackageLimit, fsSlug , fdCreatedDate) values("'.$service_name.'","'.$service_image.'","'.$package_limit.'","'.$packageslug.'","'.date('Y-m-d').'")';die;
        $service_result = mysqli_query($con,$insert_service);
       /* header('location:index.php');*/
    }
?>
<div class="row">
                                <div class="col-sm-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Add Services</h5>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <form>
                                                        <div class="form-group">
                                                            <label>Service Name</label>
                                                            <input type="text" class="form-control" placeholder="Service Name" name="ServiceName">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Service Image</label>
                                                            <input type="file" class="form-control" placeholder="Service Image" name="ServiceImage">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Package Limit</label>
                                                            <input type="number" class="form-control" placeholder="Package Limit" name="PackageLimit">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Slug</label>
                                                            <input type="text" class="form-control" placeholder="Slug of Package" name="PackageSlug">
                                                        </div>
                                                        <div>
                                                        	<input type="submit" name="AddService" class="btn btn-primary mb-2" value="Add Service">
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
<?php
include('common/footer.php');

?>