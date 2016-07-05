<?php

$a = array(
    'id' => 4,
    'name' => 'Pavel Lagoda',
    'first_name' => 'Pavel',
    'last_name' => 'Lagoda',
    'locale' => 'ru_RU',
    'country' => 'IS',
    'hometown' => NULL,
    'display_location' => 'Dalvík, IS',
    'gender' => 'male',
    'userId' => NULL,
    'greeting' => NULL,
    'aboutMe' => NULL,
    'facebookId' => '10207745808350586',
    'discoverable' => false,
    'occupation' => NULL,
    'education' => 'college_degree',
    'religiosity' => '1',
    'flavor' => NULL,
    'age' => 30,
    'birthday' => '1986-06-03T21:00:00.000Z',
    'timezone' => '3',
    'facebookVerified' => true,
    'minAge' => 21,
    'maxAge' => NULL,
    'ethnicity' => NULL,
    'languages' => NULL,
    'photos' =>
    array(
        0 =>
        array(
            'id' => '1890056778529',
            'url' => 'https://scontent.xx.fbcdn.net/t31.0-8/204422_1890056778529_215378_o.jpg',
            'width' => 1362,
            'height' => 2048,
            'source' => 'facebook-with-id',
        ),
    ),
    'likes' =>
    array(
        0 =>
        array(
            'id' => '239428089439767',
            'name' => 'haveyouseen',
            'category' => 'Retail and Consumer Merchandise',
            'created_time' => '2016-04-13T12:30:27+0000',
            'category_list' =>
            array(
                0 =>
                array(
                    'id' => '200600219953504',
                    'name' => 'Shopping & Retail',
                ),
            ),
        ),
        1 =>
        array(
            'id' => '140388709317990',
            'name' => 'Студия "Квартал 95"',
            'category' => 'Company',
            'created_time' => '2014-10-19T13:18:01+0000',
        ),
        2 =>
        array(
            'id' => '457544884387761',
            'name' => 'HTMLevolution',
            'category' => 'Computers/Technology',
            'created_time' => '2014-09-23T13:43:01+0000',
        ),
        3 =>
        array(
            'id' => '521667941196861',
            'name' => 'Брутальний Футбол',
            'category' => 'Media/News/Publishing',
            'created_time' => '2014-07-15T13:05:33+0000',
        ),
        4 =>
        array(
            'id' => '513253178688268',
            'name' => 'Великий футбол',
            'category' => 'TV Show',
            'created_time' => '2014-06-24T22:35:01+0000',
        ),
        5 =>
        array(
            'id' => '381030231978249',
            'name' => 'Find Prices',
            'category' => 'Retail and Consumer Merchandise',
            'created_time' => '2012-11-21T10:37:30+0000',
        ),
        6 =>
        array(
            'id' => '126133030772526',
            'name' => 'Webdevs',
            'category' => 'Community',
            'created_time' => '2012-11-02T13:10:22+0000',
        ),
    ),
    'reviewDate' => NULL,
    'approved' => false,
    'rejected' => false,
    'firstTime' => false,
    'admin' => NULL,
    'accessToken' => 'EAAE8yrTa4zcBAC7IHHboJCs4NbCziFOIVTvZCmKy8KAznxqmYEeZCHDpxTUOi8zef09ZAhKaECxdAW1zedvX8RfWRD48Ia0cptLJh9onbWl4ffZBRcnOZCBrM2nZA5GqcMZB200rUoiDn0FEiYFZA9iemmh4ZC3md2ilZAoFBKuvPyQkEcHaBG6tgeQwwj24Vx2akZD',
    'locationUpdatedAt' => '2016-07-05T12:34:59.653Z',
    'updatedAt' => '2016-07-05T12:54:59.146Z',
);

echo json_encode($a);
?>
