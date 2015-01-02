<?php // TWITTER STATS

                // Loads the Twitter SDK system for PHP
                require_once('assets/TwitterAPIExchange.php');

                // Create our Application instance that allows connecting to Twitter.
                $settings = array(
                    'oauth_access_token' => "545371167-irULMOms3sQrOaNwsL73EWeXDHLfy6PmYWrE2FMU",
                    'oauth_access_token_secret' => "Zv9cS7OsiGXXuARfG92lj6UvO5yQwBjH16e987zEmtpjU",
                    'consumer_key' => "7eJxfBBdxGoYf1BcPetNi9whC",
                    'consumer_secret' => "pXTgOEQO804GWeZxPmXMqFmKTgrSc3KVs8GEH6M9tpHEL9wMpb"
                );





                // This call will always work since we are fetching public data.
                $url = 'https://api.twitter.com/1.1/users/show.json';
                $getfield = '?screen_name=klpolestudio';
                $requestMethod = 'GET';

                // Generate responce through the exchange
                $twitter = new TwitterAPIExchange($settings);

                // Build in Oauth and request data
                $response = $twitter
                    ->setGetfield($getfield)
                    ->buildOauth($url, $requestMethod)
                    ->performRequest();

                // Decode json file into array
                $user = json_decode($response);





                // This call will always work since we are fetching public data.
                $url = 'https://api.twitter.com/1.1/statuses/user_timeline.json';
                $getfield = '?screen_name=klpolestudio&count=' . $twitterFeedCount;
                $requestMethod = 'GET';

                // Generate responce through the exchange
                $twitter = new TwitterAPIExchange($settings);

                // Build in Oauth and request data
                $response = $twitter
                    ->setGetfield($getfield)
                    ->buildOauth($url, $requestMethod)
                    ->performRequest();

                // Decode json file into array
                $tweets = objectToArray(json_decode($response));





                // sets up the variables for my simple array which is just a sliced version of the main FaceBook array.
                    $tw=array(
                        "followers"     =>  $user->followers_count,
                        "following"     =>  $user->friends_count,
                        "favourites"    =>  $user->favourites_count,
                        "tweets"        =>  $user->statuses_count,
                        "retweets"      =>  $user->status->retweet_count
                    );

                // uncomment to check if the twitter array works
                // print_r($tw);

                $i = 0;

                echo "<div class='twitter'>";
                echo "<h3>klpolestudio Twitter</h3>";
                echo $tw['followers'] . " followers, " . $tw['followers'] . " following";

                while ( $i < $twitterFeedCount) {       

                    $usersTimezone = 'America/New_York';
                    $date = new DateTime( $tweets[$i]['created_at'], new DateTimeZone($usersTimezone) );
                    $date = $date->format('d M');

                    if ($tweets[$i]['favorited'] > 0) {
                        $fav = $tweets[$i]['favorited'] . " <i class='fa fa-heart-o'></i>&nbsp;&nbsp;&nbsp;";
                    } else {
                        $fav = "";
                    }

                    if ($tweets[$i]['retweeted'] > 0) {
                        $rt = $tweets[$i]['retweeted'] . " <i class='fa fa-recycle'></i>";
                    } else {
                        $rt = "";
                    }

                    echo "<hr>";
                    echo $tweets[$i]['text']; 
                    echo "<div class='inner'>";
                    echo "<div class='fav'>" . $fav . $rt . "</div>";
                    echo "<div class='date'>" . $date . "</div>";
                    echo "</div>";
                    $i++;
                }

                echo "</div>";
            ?>