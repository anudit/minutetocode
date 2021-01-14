Easy
AH1C5-KFVkp-4aZfU-OO8k1  // 20 min
6rr8a-8Eqm0-MhNwE-aMdz3  // 15 min
mSxTD-TABEX-OyCKE-htFqP  // 10 min
u0S0I-Du5Dw-cc6T7-or2AH  // 5 min

Hard
V5ko9-grUlA-5bedB-DepIK   // 20 min
MSbnN-MTcW4-mo5Mu-Qf5OP   // 15 min
WzX1D-NiKVS-wAjdB-RQb0v   // 10 min
J7Myn-4w4bp-jFTSS-hUycZ   // 5 min

<?php
   $option = isset($_POST['selectlang']) ? $_POST['selectlang'] : false;
   if ($option) {

    $lang = $_POST['selectlang'];
	  $time = $_POST['selecttime'];
	  $diff = $_POST['selectdiff'];

    if ($diff == 'easy') {
      if ($lang == 'c++'){
        if ($time=='20'){
        header('Location: c++/AH1C5-KFVkp-4aZfU-OO8k1.php');
        }
        else if ($time=='15'){
          header('Location: c++/6rr8a-8Eqm0-MhNwE-aMdz3.php');
        }
        else if ($time=='10'){
          header('Location: c++/mSxTD-TABEX-OyCKE-htFqP.php');
        }
        else if ($time=='5'){
          header('Location: c++/u0S0I-Du5Dw-cc6T7-or2AH.php');
        }
      }
      else if ($lang == 'python'){
        if ($time=='20'){
        header('Location: python/AH1C5-KFVkp-4aZfU-OO8k1.php');
        }
        else if ($time=='15'){
          header('Location: python/6rr8a-8Eqm0-MhNwE-aMdz3.php');
        }
        else if ($time=='10'){
          header('Location: python/mSxTD-TABEX-OyCKE-htFqP.php');
        }
        else if ($time=='5'){
          header('Location: python/u0S0I-Du5Dw-cc6T7-or2AH.php');
        }
      }
      else if ($lang == 'java'){
        if ($time=='20'){
        header('Location: java/AH1C5-KFVkp-4aZfU-OO8k1.php');
        }
        else if ($time=='15'){
          header('Location: java/6rr8a-8Eqm0-MhNwE-aMdz3.php');
        }
        else if ($time=='10'){
          header('Location: java/mSxTD-TABEX-OyCKE-htFqP.php');
        }
        else if ($time=='5'){
          header('Location: java/u0S0I-Du5Dw-cc6T7-or2AH.php');
        }
      }
      else if ($lang == 'qbasic'){
        if ($time=='20'){
        header('Location: qbasic/AH1C5-KFVkp-4aZfU-OO8k1.php');
        }
        else if ($time=='15'){
          header('Location: qbasic/6rr8a-8Eqm0-MhNwE-aMdz3.php');
        }
        else if ($time=='10'){
          header('Location: qbasic/mSxTD-TABEX-OyCKE-htFqP.php');
        }
        else if ($time=='5'){
          header('Location: qbasic/u0S0I-Du5Dw-cc6T7-or2AH.php');
        }
      }
      else{ // garbled input
        echo 'Updates Coming Soon';
      }
    }// end easy
    else { // hard
      if ($lang == 'c++'){
        if ($time=='20'){
        header('Location: c++/V5ko9-grUlA-5bedB-DepIK.php');
        }
        else if ($time=='15'){
          header('Location: c++/MSbnN-MTcW4-mo5Mu-Qf5OP.php');
        }
        else if ($time=='10'){
          header('Location: c++/WzX1D-NiKVS-wAjdB-RQb0v.php');
        }
        else if ($time=='5'){
          header('Location: c++/J7Myn-4w4bp-jFTSS-hUycZ.php');
        }
      }
      else if ($lang == 'python'){
        if ($time=='20'){
        header('Location: python/V5ko9-grUlA-5bedB-DepIK.php');
        }
        else if ($time=='15'){
          header('Location: python/MSbnN-MTcW4-mo5Mu-Qf5OP.php');
        }
        else if ($time=='10'){
          header('Location: python/WzX1D-NiKVS-wAjdB-RQb0v.php');
        }
        else if ($time=='5'){
          header('Location: python/J7Myn-4w4bp-jFTSS-hUycZ.php');
        }
      }
      else if ($lang == 'java'){
        if ($time=='20'){
        header('Location: java/V5ko9-grUlA-5bedB-DepIK.php');
        }
        else if ($time=='15'){
          header('Location: java/MSbnN-MTcW4-mo5Mu-Qf5OP.php');
        }
        else if ($time=='10'){
          header('Location: java/WzX1D-NiKVS-wAjdB-RQb0v.php');
        }
        else if ($time=='5'){
          header('Location: java/J7Myn-4w4bp-jFTSS-hUycZ.php');
        }
      }
      else if ($lang == 'qbasic'){
        if ($time=='20'){
        header('Location: qbasic/V5ko9-grUlA-5bedB-DepIK.php');
        }
        else if ($time=='15'){
          header('Location: qbasic/MSbnN-MTcW4-mo5Mu-Qf5OP.php');
        }
        else if ($time=='10'){
          header('Location: qbasic/WzX1D-NiKVS-wAjdB-RQb0v.php');
        }
        else if ($time=='5'){
          header('Location: qbasic/J7Myn-4w4bp-jFTSS-hUycZ.php');
        }
      }
      else{ // garbled input
        echo 'Updates Coming Soon';
      }
    }// end hard

   }
   else {
     header('Location: index.php');
     exit;
   }// end option validate
?>
