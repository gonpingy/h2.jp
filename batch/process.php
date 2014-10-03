<?php
require_once('./Requester.php');

$text = 'process_33_';
$photo_list = getPhotoList($text);
generateProcess($photo_list);

function getPhotoList($text) {
  $query = array(
    'method' => 'flickr.photos.search',
    'api_key' => '83fbd100f73d89e031214e37686e10bf',
    'user_id' => '73139181@N06',
    'text' => $text,
    'format' => 'json',
  );
  $api = 'http://api.flickr.com/services/rest/';
  $url_list = array($api . '?' . http_build_query($query));

  $requester = new Requester($url_list);
  $result = array_pop($requester->execute());

  echo sprintf('photo list status %d' . PHP_EOL, $result['status']);

  if (true) {
  //if ($result['status'] == 200) {
    //$data = str_replace('jsonFlickrApi(', '', $result['content']);
    $data = str_replace('jsonFlickrApi(', '', '{"photos":{"page":1, "pages":1, "perpage":100, "total":"32", "photo":[{"id":"11133723066", "owner":"73139181@N06", "secret":"3cca767b5f", "server":"3814", "farm":4, "title":"process_33_21", "ispublic":1, "isfriend":0, "isfamily":0}, {"id":"11133892273", "owner":"73139181@N06", "secret":"283ca4b30a", "server":"3679", "farm":4, "title":"process_33_10", "ispublic":1, "isfriend":0, "isfamily":0}, {"id":"11133737466", "owner":"73139181@N06", "secret":"a7ba9e92c4", "server":"3757", "farm":4, "title":"process_33_12", "ispublic":1, "isfriend":0, "isfamily":0}, {"id":"11133720366", "owner":"73139181@N06", "secret":"059d15818f", "server":"5520", "farm":6, "title":"process_33_24", "ispublic":1, "isfriend":0, "isfamily":0}, {"id":"11133708375", "owner":"73139181@N06", "secret":"7ab407a45f", "server":"7380", "farm":8, "title":"process_33_14", "ispublic":1, "isfriend":0, "isfamily":0}, {"id":"11133870793", "owner":"73139181@N06", "secret":"d5ce7f4b60", "server":"7291", "farm":8, "title":"process_33_26", "ispublic":1, "isfriend":0, "isfamily":0}, {"id":"11133695365", "owner":"73139181@N06", "secret":"16717d22f4", "server":"2841", "farm":3, "title":"process_33_22", "ispublic":1, "isfriend":0, "isfamily":0}, {"id":"11133729855", "owner":"73139181@N06", "secret":"01387eecbc", "server":"3740", "farm":4, "title":"process_33_02", "ispublic":1, "isfriend":0, "isfamily":0}, {"id":"11133768414", "owner":"73139181@N06", "secret":"a1dd28e4fc", "server":"7290", "farm":8, "title":"process_33_18", "ispublic":1, "isfriend":0, "isfamily":0}, {"id":"11133899513", "owner":"73139181@N06", "secret":"3c67d00fe2", "server":"2807", "farm":3, "title":"process_33_07", "ispublic":1, "isfriend":0, "isfamily":0}, {"id":"11133705915", "owner":"73139181@N06", "secret":"73c0635a3e", "server":"7339", "farm":8, "title":"process_33_16", "ispublic":1, "isfriend":0, "isfamily":0}, {"id":"11133744916", "owner":"73139181@N06", "secret":"0821d79bca", "server":"2846", "farm":3, "title":"process_33_08", "ispublic":1, "isfriend":0, "isfamily":0}, {"id":"11133796954", "owner":"73139181@N06", "secret":"4613a91a2a", "server":"7303", "farm":8, "title":"process_33_03", "ispublic":1, "isfriend":0, "isfamily":0}, {"id":"11133688875", "owner":"73139181@N06", "secret":"f8d7f52d1b", "server":"7327", "farm":8, "title":"process_33_27", "ispublic":1, "isfriend":0, "isfamily":0}, {"id":"11133720896", "owner":"73139181@N06", "secret":"ceb863030b", "server":"7430", "farm":8, "title":"process_33_23", "ispublic":1, "isfriend":0, "isfamily":0}, {"id":"11133783064", "owner":"73139181@N06", "secret":"01502e02b4", "server":"3818", "farm":4, "title":"process_33_09", "ispublic":1, "isfriend":0, "isfamily":0}, {"id":"11133698255", "owner":"73139181@N06", "secret":"9e0432888f", "server":"7414", "farm":8, "title":"process_33_20", "ispublic":1, "isfriend":0, "isfamily":0}, {"id":"11133797404", "owner":"73139181@N06", "secret":"9808dfc8eb", "server":"7411", "farm":8, "title":"process_33_01", "ispublic":1, "isfriend":0, "isfamily":0}, {"id":"11133901563", "owner":"73139181@N06", "secret":"61d3f8369b", "server":"7324", "farm":8, "title":"process_33_06", "ispublic":1, "isfriend":0, "isfamily":0}, {"id":"11133889603", "owner":"73139181@N06", "secret":"1057a70972", "server":"3759", "farm":4, "title":"process_33_11", "ispublic":1, "isfriend":0, "isfamily":0}, {"id":"11133768004", "owner":"73139181@N06", "secret":"93413c8aeb", "server":"3687", "farm":4, "title":"process_33_19", "ispublic":1, "isfriend":0, "isfamily":0}, {"id":"11133904213", "owner":"73139181@N06", "secret":"211d587abe", "server":"3769", "farm":4, "title":"process_33_04", "ispublic":1, "isfriend":0, "isfamily":0}, {"id":"11133886973", "owner":"73139181@N06", "secret":"c25d6e807e", "server":"7418", "farm":8, "title":"process_33_15", "ispublic":1, "isfriend":0, "isfamily":0}, {"id":"11133770934", "owner":"73139181@N06", "secret":"1a458d7c02", "server":"3802", "farm":4, "title":"process_33_17", "ispublic":1, "isfriend":0, "isfamily":0}, {"id":"11133724765", "owner":"73139181@N06", "secret":"f01a1205e6", "server":"7426", "farm":8, "title":"process_33_05", "ispublic":1, "isfriend":0, "isfamily":0}, {"id":"11133739616", "owner":"73139181@N06", "secret":"d2bf18df6a", "server":"7376", "farm":8, "title":"process_33_13", "ispublic":1, "isfriend":0, "isfamily":0}, {"id":"11133714436", "owner":"73139181@N06", "secret":"dc44cc0c18", "server":"5524", "farm":6, "title":"process_33_28", "ispublic":1, "isfriend":0, "isfamily":0}, {"id":"11133758514", "owner":"73139181@N06", "secret":"cd04dfb1a6", "server":"5520", "farm":6, "title":"process_33_25", "ispublic":1, "isfriend":0, "isfamily":0}]}, "stat":"ok"})');
    $data = json_decode(substr($data, 0, strlen( $data ) - 1), true);

    $url_list = array();
    $query = array(
      'method' => 'flickr.photos.getInfo',
      'api_key' => '83fbd100f73d89e031214e37686e10bf',
      'user_id' => '73139181@N06',
      'format' => 'json',
    );
    $api = 'http://api.flickr.com/services/rest/';

    foreach ($data['photos']['photo'] as $photo) {
      $query['photo_id'] = $photo['id'];
      $url_list[] = $api . '?' . http_build_query($query);
    }

    $requester->setUrlList($url_list);
    $result_list = $requester->execute();
    $photo_list = array();

    foreach ($result_list as $url => $result) { 
      echo sprintf('photo %s status %d' . PHP_EOL, $url, $result['status']);

      if ($result['status'] == 200) {
        $data = str_replace('jsonFlickrApi(', '', $result['content']);
        $data = json_decode(substr($data, 0, strlen($data) - 1), true);
        $photo_list[$data['photo']['title']['_content']] = $data['photo'];
      } else {
        echo 'photo error' . PHP_EOL;
      }
    }

    return $photo_list;
  } else {
    exit(1);
  }
}

function getPhoto($photo_id) {
  $query = array(
    'method' => 'flickr.photos.getInfo',
    'api_key' => 'c806824b8b8a90d0752bbc6052d708eb',
    'photo_id' => $photo_id,
    'user_id' => '73139181@N06',
    'format' => 'php_serial',
  );
  $api = 'http://api.flickr.com/services/rest/';
  $url_list = array($api . '?' . http_build_query($query));

  $requester = new Requester($url_list);
  $result = array_pop($requester->execute());

  if ($result['status'] == 200) {
    return unserialize($result['content']);
  } else {
    echo 'process list error' . PHP_EOL;

    exit(1);
  }
}

function generateProcess($photo_list) {
  $i = 0;
  $template = "<li%s>\n" .
    "<div>\n" .
    "<a title=\"%s\" rel=\"process\" href=\"%s\">\n" .
    "<img src=\"%s\" alt=\"%s\" />\n" .
    "</a>\n" .
    "</div>\n" .
    "<p>%s</p>\n" .
    "</li>\n";

  
  uasort($photo_list, 'compareTitleContent');

  echo '<ul>' . PHP_EOL;

  foreach ($photo_list as $photo) {
    $class = ($i + 1) % 3 === 1 ? ' class="left"' : '';
    $url = sprintf('http://farm%s.staticflickr.com/%s/%s_%s.jpg', $photo['farm'], $photo['server'], $photo['id'], $photo['secret']);
    $note = rtrim($photo['description']['_content']);

    echo sprintf($template, $class, $note, $url, $url, $note, $note);
    $i++;
  }

  echo '</ul>' . PHP_EOL;
  echo $i;
}

function compareTitleContent($a, $b) {
  if ($a['title']['_content'] < $b['title']['_content']) {
    return -1;
  } else {
    return 1;
  }
}
