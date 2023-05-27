<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Handles the creation of table `een_partnership_proposal`.
 */
class m200406_130013_dashboard_visible_widgets6 extends Migration
{


    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->update('amos_widgets', ['status' => false], ['classname' => 'open20\amos\admin\widgets\icons\WidgetIconValidatedUserProfiles']);

    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->execute('SET FOREIGN_KEY_CHECKS = 0;');
        $this->update('amos_widgets', ['status' => true], ['classname' => 'open20\amos\admin\widgets\icons\WidgetIconValidatedUserProfiles']);
        $this->execute('SET FOREIGN_KEY_CHECKS = 1;');

    }
}
