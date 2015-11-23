<?php

/**
 * This is the model class for table "{{broadcast}}".
 *
 * The followings are the available columns in table '{{broadcast}}':
 * @property integer $id
 * @property string $title
 * @property string $description
 * @property string $youtube_id
 * @property string $publish
 * @property string $expiry
 * @property integer $status
 * @property integer $created_by
 * @property string $created_on
 * @property integer $modified_by
 * @property string $modified_on
 */
class Broadcast extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return '{{broadcast}}';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('created_on', 'required'),
            array('status, created_by, modified_by', 'numerical', 'integerOnly' => true),
            array('title', 'length', 'max' => 250),
            array('youtube_id', 'length', 'max' => 50),
            array('description, publish, expiry, modified_on', 'safe'),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, title, description, youtube_id, publish, expiry, status, created_by, created_on, modified_by, modified_on', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'title' => 'Title',
            'description' => 'Description',
            'youtube_id' => 'YouTube ID',
            'publish' => 'Published',
            'expiry' => 'Expiry',
            'status' => 'Status',
            'created_by' => 'Created By',
            'created_on' => 'Created On',
            'modified_by' => 'Modified By',
            'modified_on' => 'Modified On',
        );
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     *
     * Typical usecase:
     * - Initialize the model fields with values from filter form.
     * - Execute this method to get CActiveDataProvider instance which will filter
     * models according to data in model fields.
     * - Pass data provider to CGridView, CListView or any similar widget.
     *
     * @return CActiveDataProvider the data provider that can return the models
     * based on the search/filter conditions.
     */
    public function search() {
        // @todo Please modify the following code to remove attributes that should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('title', $this->title, true);
        $criteria->compare('description', $this->description, true);
        $criteria->compare('youtube_id', $this->youtube_id, true);
        $criteria->compare('publish', $this->publish, true);
        $criteria->compare('expiry', $this->expiry, true);
        $criteria->compare('status', $this->status);
        $criteria->compare('created_by', $this->created_by);
        $criteria->compare('created_on', $this->created_on, true);
        $criteria->compare('modified_by', $this->modified_by);
        $criteria->compare('modified_on', $this->modified_on, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }
    
    public function search_fronend() {
        // @todo Please modify the following code to remove attributes that should not be searched.

        $criteria = new CDbCriteria;
        $criteria->condition = 'status=1';

        $criteria->compare('id', $this->id);
        $criteria->compare('title', $this->title, true);
        $criteria->compare('description', $this->description, true);
        $criteria->compare('youtube_id', $this->youtube_id, true);
        $criteria->compare('publish', $this->publish, true);
        $criteria->compare('expiry', $this->expiry, true);
        $criteria->compare('status', $this->status);
        $criteria->compare('created_by', $this->created_by);
        $criteria->compare('created_on', $this->created_on, true);
        $criteria->compare('modified_by', $this->modified_by);
        $criteria->compare('modified_on', $this->modified_on, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
            'pagination' => array(
                'pageSize' => Yii::app()->params['pageSize20'],
            ),
            'sort' => array('defaultOrder' => 'publish DESC')
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Broadcast the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
