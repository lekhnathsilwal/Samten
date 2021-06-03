<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MessagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('messages')->insert([
            [
                'title'=>'Welcome To Our School',
                'subtitle'=>'Samten Memorial Education Academy',
                'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ac erat a diam rutrum laoreet. Cras vitae fringilla turpis. In laoreet nunc vel lacinia luctus. Nullam suscipit volutpat magna, vel tempus mauris auctor non. Duis nec orci egestas, hendrerit purus non, egestas diam. Donec viverra arcu quam, vel aliquam libero sagittis ut. Aenean non mauris vel nisl pulvinar malesuada ut non dui.',
                'type'=>'welcome',
                'image'=>'samten.png',
                'created_at'=>\Carbon\Carbon::now()
            ],[
                'title'=>'Message from Principal.',
                'subtitle'=>'Shakti Raj Nepal  ',
                'description'=>'I welcome all valued parents and students, who are eager to know the values of global standard of education. We don\'t make schedule for students to read the books and make the note rather we give them equal environment for developing their hidden talents and shaping good and multiple personalities. We have child friendly and smart education system with high motivation of creativity. Everyone has the chance to flourish his/her capacity. We are committed to shape the aim of students obtaining the information of life on the challenges as an information system.Visit us study annd feel the real taste of learning which is surely dedicated to produce the global learners.',
                'type'=>'principal',
                'image'=>'pp_1589003890.jpg',
                'created_at'=>\Carbon\Carbon::now()
            ],[
                'title'=>'Our Mission:',
                'description'=>'We aim at empowering and fostering its entire building star to be global resources and citizens, critical thinkers, humble problem solvers, users of modern technologies, effective communicators and lifelong learners of this rapidly changing global community.',
                'type'=>'mission',
                'created_at'=>\Carbon\Carbon::now()
            ],[
                'title'=>'Our Goal:',
                'description'=>'We ensure to foster holistic development of our student. We focus on multidimensional activities to bring the positive vibe in the life of the students. Welcome to Samten Academy Established Since 1898.',
                'type'=>'mission',
                'created_at'=>\Carbon\Carbon::now()
            ],[
                'title'=>'Our Vision:',
                'description'=>'The vision of the school is to "build a responsible, innovative and global manpower with highest degree of excellency."',
                'type'=>'mission',
                'created_at'=>\Carbon\Carbon::now()
            ],[
                'title'=>'Our Motto:',
                'description'=>'"Relaxed mind, innovative, creative and multidimensional personality."',
                'type'=>'mission',
                'created_at'=>\Carbon\Carbon::now()
            ],[
                'title'=>'Message from the chairman & BOD.',
                'subtitle'=>'-Nimto Sherpa, Nima Sherpa & Rinjen Tsomo Sherpa, Chairman & BOD.',
                'description'=>'Our life is changing along with the time. Adjusting with the time is real challenge at present. Our kids are our future and our concern is to provide them with the moral, cultural, and spiritual development along with quality education. This place is the excellent academic hub for bringing best of the best with the belief in MI(Multiple Intelligences). We prioritize to boost up the hidden talents of the students. We appeal to join the best team for excellency.',
                'type'=>'bod',
                'created_at'=>\Carbon\Carbon::now()
            ],[
                'title'=>'Experience Teachers',
                'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                'type'=>'features',
                'image'=>'teacher_1589019411.png',
                'created_at'=>\Carbon\Carbon::now()
            ],[
                'title'=>'Smart Courses',
                'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                'type'=>'features',
                'image'=>'book.png',
                'created_at'=>\Carbon\Carbon::now()
            ],[
                'title'=>'Scholarship',
                'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                'type'=>'features',
                'image'=>'graduation-icon.png',
                'created_at'=>\Carbon\Carbon::now()
            ]
        ]);
    }
}
