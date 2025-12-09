<?php

/**

 * Movie Database

 * Contains movie information for the recommender system

 */

 

$movieDatabase = [

    [

        'id' => 1,

        'title' => 'Shrek',

        'year' => 2001,

        'genres' => ['Animation', 'Adventure', 'Comedy', 'Fantasy'],

        'plot' => 'An ogre embarks on a journey to rescue a princess from a dragon to get his swamp back',

        'keywords' => ['ogre', 'princess', 'dragon', 'fairy tale', 'adventure', 'swamp', 'donkey', 'quest'],

        'rating' => 7.9,

        'duration' => '90 min'

    ],

    [

        'id' => 2,

        'title' => 'Frozen',

        'year' => 2013,

        'genres' => ['Animation', 'Adventure', 'Comedy', 'Family'],

        'plot' => 'Two sisters, one with ice powers, must save their kingdom from eternal winter',

        'keywords' => ['princess', 'ice', 'snow', 'sisters', 'magic', 'kingdom', 'winter', 'adventure'],

        'rating' => 7.4,

        'duration' => '102 min'

    ],

    [

        'id' => 3,

        'title' => 'How to Train Your Dragon',

        'year' => 2010,

        'genres' => ['Animation', 'Action', 'Adventure', 'Comedy'],

        'plot' => 'A young Viking befriends a dragon and learns that dragons aren\'t what he thought',

        'keywords' => ['dragon', 'viking', 'friendship', 'flying', 'adventure', 'coming of age'],

        'rating' => 8.1,

        'duration' => '98 min'

    ],

    [

        'id' => 4,

        'title' => 'Mulan',

        'year' => 1998,

        'genres' => ['Animation', 'Adventure', 'Family', 'War'],

        'plot' => 'A young woman disguises herself as a man to take her father\'s place in war',

        'keywords' => ['warrior', 'princess', 'china', 'war', 'disguise', 'honor', 'dragon', 'brave'],

        'rating' => 7.6,

        'duration' => '88 min'

    ],

    [

        'id' => 5,

        'title' => 'Tangled',

        'year' => 2010,

        'genres' => ['Animation', 'Adventure', 'Comedy', 'Family'],

        'plot' => 'A princess with magical long hair escapes her tower with the help of a thief',

        'keywords' => ['princess', 'tower', 'magic', 'hair', 'adventure', 'romance', 'escape'],

        'rating' => 7.7,

        'duration' => '100 min'

    ],

    [

        'id' => 6,

        'title' => 'Brave',

        'year' => 2012,

        'genres' => ['Animation', 'Adventure', 'Comedy', 'Family'],

        'plot' => 'A Scottish princess defies tradition and accidentally turns her mother into a bear',

        'keywords' => ['princess', 'scotland', 'archery', 'brave', 'magic', 'mother', 'bear', 'tradition'],

        'rating' => 7.1,

        'duration' => '93 min'

    ],

    [

        'id' => 7,

        'title' => 'The Hobbit',

        'year' => 2012,

        'genres' => ['Adventure', 'Fantasy'],

        'plot' => 'A hobbit joins a group of dwarves on a quest to reclaim their homeland from a dragon',

        'keywords' => ['dragon', 'quest', 'adventure', 'fantasy', 'treasure', 'ring', 'wizard'],

        'rating' => 7.8,

        'duration' => '169 min'

    ],

    [

        'id' => 8,

        'title' => 'Maleficent',

        'year' => 2014,

        'genres' => ['Adventure', 'Family', 'Fantasy'],

        'plot' => 'The untold story of the villain from Sleeping Beauty and her relationship with the princess',

        'keywords' => ['princess', 'fairy', 'curse', 'magic', 'wings', 'revenge', 'redemption'],

        'rating' => 6.9,

        'duration' => '97 min'

    ],

    [

        'id' => 9,

        'title' => 'Moana',

        'year' => 2016,

        'genres' => ['Animation', 'Adventure', 'Comedy', 'Family'],

        'plot' => 'A Polynesian princess sets sail to save her island with the help of a demigod',

        'keywords' => ['princess', 'ocean', 'adventure', 'island', 'demigod', 'voyage', 'brave'],

        'rating' => 7.6,

        'duration' => '107 min'

    ],

    [

        'id' => 10,

        'title' => 'The Princess Bride',

        'year' => 1987,

        'genres' => ['Adventure', 'Family', 'Fantasy', 'Romance'],

        'plot' => 'A fairy tale adventure about a princess, her true love, and their quest to be together',

        'keywords' => ['princess', 'adventure', 'romance', 'sword fighting', 'fairy tale', 'rescue'],

        'rating' => 8.0,

        'duration' => '98 min'

    ],

    [

        'id' => 11,

        'title' => 'Sleeping Beauty',

        'year' => 1959,

        'genres' => ['Animation', 'Family', 'Fantasy', 'Musical'],

        'plot' => 'A princess cursed to sleep until awakened by true love\'s kiss',

        'keywords' => ['princess', 'curse', 'magic', 'fairy', 'dragon', 'sleep', 'true love'],

        'rating' => 7.2,

        'duration' => '75 min'

    ],

    [

        'id' => 12,

        'title' => 'Enchanted',

        'year' => 2007,

        'genres' => ['Animation', 'Adventure', 'Comedy', 'Family', 'Fantasy'],

        'plot' => 'A princess is transported to modern-day New York City',

        'keywords' => ['princess', 'fairy tale', 'magic', 'romance', 'modern', 'adventure'],

        'rating' => 7.0,

        'duration' => '107 min'

    ],

    [

        'id' => 13,

        'title' => 'Hercules',

        'year' => 1997,

        'genres' => ['Animation', 'Adventure', 'Comedy', 'Family'],

        'plot' => 'The son of Zeus must become a true hero to reclaim his place among the gods',

        'keywords' => ['hero', 'greek', 'mythology', 'gods', 'adventure', 'monster', 'strength'],

        'rating' => 7.3,

        'duration' => '93 min'

    ],

    [

        'id' => 14,

        'title' => 'The Sword in the Stone',

        'year' => 1963,

        'genres' => ['Animation', 'Adventure', 'Comedy', 'Family'],

        'plot' => 'A young boy is tutored by a wizard and pulls the magical sword from the stone',

        'keywords' => ['king arthur', 'wizard', 'magic', 'sword', 'medieval', 'adventure', 'dragon'],

        'rating' => 7.1,

        'duration' => '79 min'

    ],

    [

        'id' => 15,

        'title' => 'Pete\'s Dragon',

        'year' => 2016,

        'genres' => ['Adventure', 'Family', 'Fantasy'],

        'plot' => 'An orphaned boy befriends a friendly dragon in the Pacific Northwest',

        'keywords' => ['dragon', 'friendship', 'forest', 'adventure', 'magic', 'family'],

        'rating' => 6.7,

        'duration' => '102 min'

    ],

    [

        'id' => 16,

        'title' => 'The NeverEnding Story',

        'year' => 1984,

        'genres' => ['Adventure', 'Drama', 'Family', 'Fantasy'],

        'plot' => 'A boy reads a magical book about a young warrior fighting to save a fantasy world',

        'keywords' => ['fantasy', 'adventure', 'dragon', 'quest', 'magic', 'warrior', 'imagination'],

        'rating' => 7.4,

        'duration' => '102 min'

    ],

    [

        'id' => 17,

        'title' => 'Ella Enchanted',

        'year' => 2004,

        'genres' => ['Comedy', 'Family', 'Fantasy', 'Romance'],

        'plot' => 'A young woman cursed with obedience goes on a quest to break the spell',

        'keywords' => ['princess', 'curse', 'magic', 'adventure', 'quest', 'fairy tale'],

        'rating' => 6.3,

        'duration' => '96 min'

    ],

    [

        'id' => 18,

        'title' => 'The Little Mermaid',

        'year' => 1989,

        'genres' => ['Animation', 'Adventure', 'Family', 'Fantasy', 'Musical'],

        'plot' => 'A mermaid princess dreams of becoming human and falls in love with a prince',

        'keywords' => ['princess', 'mermaid', 'ocean', 'magic', 'romance', 'adventure', 'underwater'],

        'rating' => 7.6,

        'duration' => '83 min'

    ],

    [

        'id' => 19,

        'title' => 'Beauty and the Beast',

        'year' => 1991,

        'genres' => ['Animation', 'Family', 'Fantasy', 'Musical', 'Romance'],

        'plot' => 'A young woman falls in love with a cursed prince trapped in the form of a beast',

        'keywords' => ['princess', 'beast', 'curse', 'magic', 'romance', 'castle', 'fairy tale'],

        'rating' => 8.0,

        'duration' => '84 min'

    ],

    [

        'id' => 20,

        'title' => 'Aladdin',

        'year' => 1992,

        'genres' => ['Animation', 'Adventure', 'Comedy', 'Family', 'Fantasy'],

        'plot' => 'A street urchin finds a magic lamp and uses its genie to win the heart of a princess',

        'keywords' => ['princess', 'magic', 'genie', 'adventure', 'flying carpet', 'wish', 'arabian'],

        'rating' => 8.0,

        'duration' => '90 min'

    ]

];

// --- Simple movie recommender API ---

// Always return JSON
header('Content-Type: application/json; charset=utf-8');

// Get the query text from the URL: mv.php?query=...
$query = isset($_GET['query']) ? trim($_GET['query']) : '';

if ($query === '') {
    echo json_encode([
        'success' => false,
        'error'   => 'Missing query parameter.'
    ]);
    exit;
}

// Normalize and split query into words
$normalized = strtolower($query);
$tokens = preg_split('/\s+/', $normalized);

$matches = [];

// Very simple "AI": score movies by how many query words appear
// in title + plot + genres + keywords
foreach ($movieDatabase as $movie) {
    $haystack = strtolower(
        $movie['title'] . ' ' .
        $movie['plot'] . ' ' .
        implode(' ', $movie['genres']) . ' ' .
        implode(' ', $movie['keywords'])
    );

    $score = 0;
    foreach ($tokens as $token) {
        if ($token === '') continue;
        if (strpos($haystack, $token) !== false) {
            $score += 5;             // keyword match
        }
    }

    // Boost by rating a little so higher-rated movies win ties
    $score += $movie['rating'];

    if ($score > 0) {
        $movie['score'] = $score;
        $matches[] = $movie;
    }
}

// If nothing matched, just fall back to top-rated movies
if (empty($matches)) {
    $matches = $movieDatabase;
}

// Sort by score descending
usort($matches, function ($a, $b) {
    return $b['score'] <=> $a['score'];
});

// Return the top 5 recommendations
$recommendations = array_slice($matches, 0, 5);

echo json_encode([
    'success'         => true,
    'recommendations' => $recommendations
]);
exit;


?>