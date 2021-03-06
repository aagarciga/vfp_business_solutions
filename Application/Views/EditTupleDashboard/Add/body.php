<?php
/**
 * User: Victor
 * Date: 12/01/2016
 * Time: 15:01
 * @author    Victor Luis Aguado Leon <victorluisaguadoleon@gmail.com>
 * @copyright 2011-2014 Alex Alvarez G�rciga / Dandelion (http://www.thedandelionproject.com)
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://www.thedandelionproject.com
 */

use Dandelion\Tools\Helpers\Builder;

?>

<div class="container">

    <nav class="navbar navbar-default" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">
                <img src="<?php echo $View->UploadsContext($CompanyLogo) ?>"/>
                Add Tuple on <?php echo $ControllerName; ?>:
            </a>
        </div>

        <?php $View->Control('MainMenu'); ?>
    </nav>

    <div class="panel panel-default">
        <div id="form-addTupleDashboard">
            <?php $query = array(
                'redirect' => $RedirectUrl
            );
            if (!is_null($Values)){
                $query['values'] = $Values;
                $values = json_decode(base64_decode($Values));
            }
            else{
                $values = array();
            }?>
            <?php Builder::createFormAddTupleDashboard($FieldsDefinition, $View->Href($ControllerName, 'AddTuple', $query), 'post', $values); ?>
        </div>
    </div><!-- /.panel -->

    <!--    Controls Here ...-->

</div><!-- /.container -->

<!--Modals Here ...-->
<!-- /.modal -->
