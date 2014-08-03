<?

class AccessCommand extends CConsoleCommand
{
	public function actionAddRules()
	{

		$auth = Yii::app()->authManager;

		$auth->createOperation('addRecord', 'Создание записи');
		$auth->createOperation('viewRecord', 'Просмотр записи');
		$auth->createOperation('updateRecord', 'Обновление записи');
		$auth->createOperation('deleteRecord', 'Удаление записи');
		$auth->createOperation('viewRecords', 'Просмотр записей');

		$auth->createOperation('addUser', 'Создание пользователя');
		$auth->createOperation('viewUser', 'Просмотр пользователя');
		$auth->createOperation('updateUser', 'Обновление пользователя');
		$auth->createOperation('deleteUser', 'Удаление пользователя');
		$auth->createOperation('viewUsers', 'Просмотр пользователей');

		$bizRule = 'return Yii::app()->user->id==$params["User"]->user_id;';
		$task = $auth->createTask('viewOwnRecord', 'Просмотр своей записи', $bizRule);
		$task->addChild('viewRecord');
		$task = $auth->createTask('updateOwnRecord', 'Обновление своей записи', $bizRule);
		$task->addChild('updateRecord');
		$task = $auth->createTask('deleteOwnRecord', 'Удаление своей записи', $bizRule);
		$task->addChild('deleteRecord');


		// простой пользователь
		$role = $auth->createRole('user');
		$role->addChild('viewOwnRecord');
		$role->addChild('viewRecords');


		// модератор
		$role = $auth->createRole('editor');
		$role->addChild('addRecord');
		$role->addChild('viewOwnRecord');
		$role->addChild('updateOwnRecord');
		$role->addChild('deleteOwnRecord');
		$role->addChild('viewRecords');


		// супер администратор
		$role = $auth->createRole('admin');
		$role->addChild('editor');
		$role->addChild('addUser');
		$role->addChild('viewUser');
		$role->addChild('updateUser');
		$role->addChild('deleteUser');
		$role->addChild('viewUsers');

	}

	public function actionAddAdminUser()
	{
		$user = new Users();
		$user->name = 'Администратор';
		$user->username = 'admin';
		$user->password = 'admin';
		$user->email = 'csscode.ru@ya.ru';
		$user->phone = '+79226850055';
		$user->role = 'admin';
		$user->save();

	}
}