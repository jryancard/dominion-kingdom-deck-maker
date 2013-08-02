<?php
 
 use App\Models\User;
 
class SentrySeeder extends Seeder {
 
    public function run()
    {
        DB::table('users')->delete();
        DB::table('groups')->delete();
        DB::table('users_groups')->delete();
 
        Sentry::getUserProvider()->create(array(
            'email'       => 'ryan@thewhitetower.ws',
            'password'    => "noidea2346",
            'first_name'  => 'Ryan',
            'last_name'   => 'Cardwell',
            'activated'   => 1,
        ));
 
        Sentry::getGroupProvider()->create(array(
            'name'        => 'Supers',
            'permissions' => array('admin' => 1),
        ));
 
        // Assign user permissions
        $adminUser  = Sentry::getUserProvider()->findByLogin('ryan@thewhitetower.ws');
        $adminGroup = Sentry::getGroupProvider()->findByName('Supers');
        $adminUser->addGroup($adminGroup);
    }
 
}

?>