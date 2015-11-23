<!-- Marketing Icons Section -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Live Broadcast
        </h1>
    </div>
    <div class="col-md-12">
        <?php
        $this->widget('zii.widgets.grid.CGridView', array(
            'id' => 'broadcast-grid',
            'dataProvider' => $model->search_fronend(),
            'filter' => $model,
            'htmlOptions' => array('class' => ''),
            'itemsCssClass' => 'table table-bordered table-condensed table-hover table-responsive table-striped',
            'template' => '{items}{summary}{pager}',
            'pager' => array(
                'htmlOptions' => array(
                    'class' => 'pagination',
                ),
                'header' => '',
                'selectedPageCssClass' => 'active',
            ),
            'pagerCssClass' => 'widget-footer',
            'columns' => array(
                array(
                    'name' => 'title',
                    'type' => 'raw',
                    'value' => 'CHtml::link($data->title,array("broadcast/view","id"=>$data->id))',
                    'filter' => CHtml::activeTextField($model, 'title', array('class' => 'form-control')),
                    'htmlOptions' => array('style' => "text-align:left;", 'title' => 'Title'),
                ),
                array(
                    'name' => 'description',
                    'type' => 'raw',
                    'value' => '$data->description',
                    'filter' => CHtml::activeTextField($model, 'description', array('class' => 'form-control')),
                    'htmlOptions' => array('style' => "text-align:left;width:200px;", 'title' => 'Description'),
                ),
            ),
        ));
        ?>
    </div>
</div>
<!-- /.row -->                       