<?php

use App\Surveys\Question;
use Illuminate\Database\Seeder;

class SurveySeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        foreach ($this->questions() as $data) {

            $question = [
                'name' => $data['name'],
                'position' => $data['position']
            ];

            $question = Question::create($question);

            foreach ($data['answers'] as $answer) {

                $question->answers()->create($answer);

            }
        }
    }

    protected function questions()
    {

        return [

            [
                'name'     => 'How do you describe yourself?',
                'position' => 1,
                'answers'  => [
                    [
                        'name'     => 'Funny',
                        'position' => 1,
                        'score'    => 5
                    ],
                    [
                        'name'     => 'Smart',
                        'position' => 2,
                        'score'    => 7
                    ],
                    [
                        'name'     => 'Studious',
                        'position' => 3,
                        'score'    => 10
                    ],
                    [
                        'name'     => 'Introvert',
                        'position' => 4,
                        'score'    => 1

                    ],
                    [
                        'name'     => 'Extrovert',
                        'position' => 5,
                        'score'    => 3
                    ],
                ],
            ],

            [
                'name'     => 'Do you need any kinds of noise while you are studying?',
                'position' => 2,
                'answers'  => [
                    [
                        'name'     => 'No',
                        'position' => 1,
                        'score'    => 10
                    ],
                    [
                        'name'     => 'Yes',
                        'position' => 7,

                    ],
                ],
            ],

            [
                'name'     => 'Are you a procrastinator?',
                'position' => 3,
                'answers'  => [
                    [
                        'name'     => 'No',
                        'position' => 1,
                        'score'    => 10
                    ],
                    [
                        'name'     => 'Yes',
                        'position' => 2,
                        'score'    => 5
                    ],
                ],
            ],

            [
                'name'     => 'How do you like to spend your time after the classes?',
                'position' => 4,
                'answers'  => [
                    [
                        'name'     => 'Studying',
                        'position' => 1,
                        'score'    => 10
                    ],
                    [
                        'name'     => 'Partying',
                        'position' => 2,
                        'score'    => 5

                    ],
                    [
                        'name'     => 'Hanging out with friends',
                        'position' => 3,
                        'score'    => 7
                    ],
                ],
            ],

            [
                'name'     => 'What time do you go to bed on weeknights?',
                'position' => 5,
                'answers'  => [
                    [
                        'name'     => '11 PM or earlier',
                        'position' => 1,
                        'score'    => 10

                    ],
                    [
                        'name'     => 'Around midnight',
                        'position' => 2,
                        'score'    => 7

                    ],
                    [
                        'name'     => '1 AM or later',
                        'position' => 3,
                        'score'    => 5

                    ],
                ],
            ],

            [
                'name'     => 'How much light would you like in the room while you are sleeping? ',
                'position' => 6,
                'answers'  => [
                    [
                        'name'     => 'A lot',
                        'position' => 1,
                        'score'    => 7

                    ],
                    [
                        'name'     => 'A little',
                        'position' => 2,
                        'score'    => 10

                    ],
                    [
                        'name'     => 'Completely Dark',
                        'position' => 3,
                        'score'    => 7

                    ],
                ],
            ],

            [
                'name'     => 'How many all-nighters do you pull per year?',
                'position' => 7,
                'answers'  => [
                    [
                        'name'     => 'More than 2x per week',
                        'position' => 1,

                    ],
                    [
                        'name'     => 'Once per week',
                        'position' => 3,

                    ],
                    [
                        'name'     => 'Once a month',
                        'position' => 7,

                    ],
                    [
                        'name'     => 'Almost never',
                        'position' => 10,

                    ],
                ],
            ],

            [
                'name'     => 'What is your typical study style?',
                'position' => 8,
                'answers'  => [
                    [
                        'name'     => 'In the library',
                        'position' => 1,
                        'score'    => 10

                    ],
                    [
                        'name'     => 'At your desk',
                        'position' => 2,
                        'score'    => 7

                    ],
                    [
                        'name'     => 'With a group of friends',
                        'position' => 3,
                        'score'    => 5

                    ],
                    [
                        'name'     => 'A quiet room',
                        'position' => 4,
                        'score'    => 7

                    ],
                ],
            ],

            [
                'name'     => 'How messy is your room? ',
                'position' => 9,
                'answers'  => [
                    [
                        'name'     => 'Always very clean',
                        'position' => 1,
                        'score'    => 10
                    ],
                    [
                        'name'     => 'Usually clean',
                        'position' => 2,
                        'score'    => 7
                    ],
                    [
                        'name'     => 'Slightly disorganized',
                        'position' => 3,
                        'score'    => 5

                    ],
                    [
                        'name'     => 'I never clean my room',
                        'position' => 4,
                        'score'    => 1
                    ],
                ],
            ],

            [
                'name'     => 'Do you make your bed?',
                'position' => 10,
                'answers'  => [
                    [
                        'name'     => 'No',
                        'position' => 1,
                        'score'    => 1
                    ],
                    [
                        'name'     => 'Yes',
                        'position' => 2,
                        'score'    => 10
                    ],
                ],
            ],

            [
                'name'     => 'Are you willing to share anything with your roommate?',
                'position' => 11,
                'answers'  => [
                    [
                        'name'     => 'No',
                        'position' => 1,
                        'score'    => 1
                    ],
                    [
                        'name'     => 'Yes',
                        'position' => 2,
                        'score'    => 7

                    ],
                    [
                        'name'     => 'Only with my permission',
                        'position' => 3,
                        'score'    => 10

                    ],
                    [
                        'name'     => 'Only Cleaning stuff',
                        'position' => 4,
                        'score'    => 3

                    ],
                ],
            ],

            [
                'name'     => 'What type of roommate are you looking for?',
                'position' => 12,
                'answers'  => [
                    [
                        'name'     => 'A roommate that can be my best friend',
                        'position' => 1,
                        'score'    => 10
                    ],
                    [
                        'name'     => 'I am not looking for any kinds of friendship',
                        'position' => 2,
                        'score'    => 7
                    ],
                ],
            ],

            [
                'name'     => 'How often are you planning to bring your significant other to spend the night in the room? ',
                'position' => 13,
                'answers'  => [
                    [
                        'name'     => 'Never',
                        'position' => 1,
                        'score'    => 5
                    ],
                    [
                        'name'     => 'Always',
                        'position' => 2,
                        'score'    => 3
                    ],
                    [
                        'name'     => 'Once in awhile',
                        'position' => 3,
                        'score'    => 10
                    ],
                    [
                        'name'     => 'Only with my roomate\'s permission',
                        'position' => 4,
                        'score'    => 7

                    ],
                ],
            ],

            [
                'name'     => 'Do you smoke?',
                'position' => 14,
                'answers'  => [
                    [
                        'name'     => 'No',
                        'position' => 1,
                        'score'    => 10
                    ],
                    [
                        'name'     => 'Yes',
                        'position' => 2,
                        'score'    => 5

                    ],
                ],
            ],

            [
                'name'     => 'Do you drink?',
                'position' => 15,
                'answers'  => [
                    [
                        'name'     => 'Never',
                        'position' => 1,
                        'score'    => 5
                    ],
                    [
                        'name'     => 'Always',
                        'position' => 2,
                        'score'    => 1
                    ],
                    [
                        'name'     => 'Once in awhile',
                        'position' => 3,
                        'score'    => 10
                    ],
                    [
                        'name'     => 'Only with my roommate\'s permission',
                        'position' => 4,
                        'score'    => 7
                    ],
                ],
            ],

            [
                'name'     => 'Do you usually have your friends/significant others back to your room, or do you go to their room?',
                'position' => 16,
                'answers'  => [
                    [
                        'name'     => 'Always my room',
                        'position' => 1,
                        'score'    => 5
                    ],
                    [
                        'name'     => 'Always their room',
                        'position' => 2,
                        'score'    => 7
                    ],
                    [
                        'name'     => '50/50',
                        'position' => 3,
                        'score'    => 10
                    ],
                    [
                        'name'     => 'I don’t have any friends or a significant other',
                        'position' => 4,
                        'score'    => 1
                    ],
                ],
            ],

            [
                'name'     => 'How do you like to spend your weekends',
                'position' => 17,
                'answers'  => [
                    [
                        'name'     => 'Partying',
                        'position' => 1,
                        'score'    => 5
                    ],
                    [
                        'name'     => 'Studying',
                        'position' => 2,
                        'score'    => 7
                    ],
                    [
                        'name'     => 'Hanging out',
                        'position' => 3,
                        'score'    => 10
                    ],
                ],
            ],

            [
                'name'     => 'Are you in or have been in any kind of long distance relationship that may require long hours of video chat such (ex. Skyping)?',
                'position' => 18,
                'answers'  => [
                    [
                        'name'     => 'No',
                        'position' => 1,
                        'score'    => 10
                    ],
                    [
                        'name'     => 'Yes',
                        'position' => 2,
                        'score'    => 5
                    ],
                    [
                        'name'     => 'Sometimes',
                        'position' => 3,
                        'score'    => 7
                    ],
                ],
            ],

        ];
    }
}
