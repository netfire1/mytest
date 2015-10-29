<?php

use yii\db\Schema;
use yii\db\Migration;

class m151028_232607_create_tebles_in_db_mytest extends Migration
{

    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql')
        {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%comments}}', [
            'id' => Schema::TYPE_PK,
            'comment' => Schema::TYPE_TEXT,
            'rating' => Schema::TYPE_SMALLINT,
            'username' => Schema::TYPE_STRING . ' NOT NULL',
            'id_item' => Schema::TYPE_INTEGER . ' NOT NULL',
            'post_date' => Schema::TYPE_TIMESTAMP . ' NOT NULL',
                ], $tableOptions);

        $this->execute("INSERT INTO `comments` (`id`, `comment`, `rating`, `username`, `id_item`, `post_date`) VALUES
(1, 'Full shit!!!', 5, 'pp', 1, '2015-10-26 20:19:19'),
(2, 'hooooooooooooooooly shit!', 3, 'pp', 1, '2015-10-27 18:58:55'),
(3, 'it`s a plastic one!!!', 1, 'ss', 2, '2015-10-27 19:00:32'),
(4, 'Norm', 5, 'ss', 2, '2015-10-27 19:00:49'),
(5, 'unreal', 5, 'pp', 3, '2015-10-27 19:02:10'),
(6, 'Is this a stone?', 2, 'aa', 3, '2015-10-27 19:02:40'),
(8, 'вапиваисмиваап саиавпип', NULL, 'ss', 3, '2015-10-28 19:54:22'),
(9, 'Нормальный. Деревянный такой', 5, 'Tom', 2, '2015-10-28 21:14:49'),
(10, 'Это что вообще такое', 1, 'Tom', 1, '2015-10-28 21:15:22'),
(11, 'БАРАХЛО!', 1, 'Tom', 4, '2015-10-28 21:20:20');");




        $this->createTable('{{%items}}', [
            'id' => Schema::TYPE_PK,
            'info' => Schema::TYPE_TEXT,
            'name' => Schema::TYPE_STRING,
                ], $tableOptions);

        $this->execute("INSERT INTO `items` (`id`, `info`, `name`) VALUES
(1, 'dfvddvdfv\r\ngjfj565u5jhg', 'shit'),
(2, 'damn good wooden table', 'table'),
(3, 'big and orange', 'pumpking'),
(4, 'Внешний вид и функциональность Пуф «Хит» (НСТ) – мягкая и пружинистая бескаркасная модель в современном исполнении, выполненная на основе нескольких слоев пенополиуретановой крошки разной степени жесткости. Устойчивый пуф имеет округлую форму. Он легкий, компактный, безопасный и удобный в транспортировке. Обтянут практичной обивкой из кожзаменителя. Производитель предоставляет официальную гарантию на изделие, действующую один год. Используемые материалы Пенополиуретан – экологически чистый упругий наполнитель, способен быстро восстанавливать форму после снятия нагрузки. Пеноблок обладает воздухопроницаемостью, износостойкостью и гигроскопичностью. Синтепон – объемный нетканый материал из полиэфирных волокон, который придает рельефности и мягкости сиденью. Не впитывает влагу и обладает противогрибковыми свойствами. Эксплуатация осуществляйте влажную чистку чехла при температуре не выше 40ºС; не применяйте чистящие средства, содержащие отбеливатели и агрессивные химические компоненты; протирайте поверхность аккуратно, без интенсивных втираний и надавливаний на чехол; не используйте жесткие щетки и порошки; следите за тем, чтобы наполнитель оставался внутри; не располагайте изделие в непосредственной близости от отопительных приборов, открытых источников огня; следите за целостностью чехла; соблюдайте рекомендуемые весовые нагрузки.\r\n\r\nПодробнее: https://sofino.ua/goods-14316/33387 Интернет-магазин - Sofino.ua ', 'Пуфик «Хит» NST Aliance'),
(5, 'Р-к цилинд торм 3302 ОАО ГАЗ', 'Ремкомплект цилиндра тормозного 3302, 2217, 2705, ');");





        $this->createTable('{{%user}}', [
            'id' => $this->primaryKey(),
            'username' => $this->string()->notNull()->unique(),
            'auth_key' => $this->string(32)->notNull(),
            'password_hash' => $this->string()->notNull(),
            'password_reset_token' => $this->string()->unique(),
            'email' => $this->string()->notNull()->unique(),
            'status' => $this->smallInteger()->notNull()->defaultValue(10),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
                ], $tableOptions);

        $this->execute("INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(3, 'pp', '7TZKy3wAFiK6fkVeuYtU8aDZGJCTjTaH', '$2y$13\$NpY6G4JpdFT33MJ/0V0jtOj5sVgi/R5HxO2zaE/Ypk74U6hswK.xe', NULL, 'p@p.p', 10, 1445887568, 1445887568),
(4, 'ss', 'gwNlaHkmEbNS86Fm9eY0jy9w9Xogu6SQ', '$2y$13\$vrTSxzVWeIWpaYIl/OqR7uK5aPa3tkn0sIheO16xMqJxIfjOlkcGO', NULL, 's@s.s', 10, 1445971877, 1445971877),
(5, 'aa', 'VrzcnzPWy26Azv7Ora7bA5s3g4hmKYrG', '$2y$13\$z6frCajL01d88kG468mvFuk.brwDblMhu7d2im6hA7FCvTMTlS6qa', NULL, 'a@a.a', 10, 1445971889, 1445971889),
(6, 'Tom', 'OqMpu1ikCNugKlC3naaBxplzd12Ivwu3', '$2y$13\$PGGXqkpY1SpYFMox5J3nSep0Br4KtgfkZr/5rf97kdKCBeVBLfJNO', NULL, 'tom@gmail.com', 10, 1446066576, 1446066576);");
    }

    public function down()
    {
        $this->dropTable('{{%comments}}');
        $this->dropTable('{{%items}}');
        $this->dropTable('{{%user}}');
    }

    /*
      // Use safeUp/safeDown to run migration code within a transaction
      public function safeUp()
      {
      }

      public function safeDown()
      {
      }
     */
}
