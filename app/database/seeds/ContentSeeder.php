<?php
 
class ContentSeeder extends Seeder {
 
    public function run()
    {
        DB::table('cards')->delete();
        DB::table('decks')->delete();
 
        
    }
 
}

?>