require __DIR__.'/vendor/autoload.php';

const DEFAULT_URL = 'https://bunga-matahari-4bb31.firebaseio.com';
const DEFAULT_TOKEN = '';
const DEFAULT_PATH = '/firebase/report_736283';

$firebase = new \Firebase\FirebaseLib(DEFAULT_URL, DEFAULT_TOKEN);

// --- storing an array ---
$test = [
    'foo' => 'bar',
    'i_love' => 'lamp',
    'id' => 42
];
$dateTime = new DateTime();
$firebase->set(DEFAULT_PATH . '/' . $dateTime->format('c'), $test);

// --- storing a string ---
$firebase->set(DEFAULT_PATH . '/name/contact001', 'John Doh');
