<?php
  
  $basepath = "root";
  require "header.php";
  
  $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
  
  switch ($lang)
  {
      case "fr":
        //echo "PAGE FR";
        $file_cont = loadLanguage("download_fr.txt","root");
        break;      
      default:
        //echo "PAGE EN - Setting Default";
        $file_cont = loadLanguage("download_en.txt","root");
        break;
  }
?>
<div class="intro">
    <div class="overlay">
        <div class="container">        
            <div class="hDownload" ><?= $file_cont['title'] ?></div>
            <div id="servicesDownload"  style="text-align: left;" >
                <div class="fixDownloadPst">
                        
                    <h3 class="sizeT"><?= $file_cont['version'] ?></h3>
                    <div class="fixPositionBtn">
                        <a class="p-button--positive" href="<?= $file_cont['link_tarball'] ?>" download="alcasar-3.2.tar.gz"><?= $file_cont['download'] ?></a>
                    </div> 
                    <p><?= $file_cont['descpt'] ?></p>
                    <p> SHA256 : <?= $file_cont['sha256'] ?> </p>
                   
                    
                 <p style="margin-top: 24px;">  <?= $file_cont['num_1'] ?> </p>
                </div>
                 <div class="row" style="margin-left: 7px;" >
                        <div class="col-md-6">
                            <ul class="check-li">
                                <li><?= $file_cont['num_2'] ?> </li>
                                <li><?= $file_cont['num_3'] ?> </li>
                                <li><?= $file_cont['num_4'] ?></li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="check-li">
                                <li><?= $file_cont['num_5'] ?></li>
                                <li><?= $file_cont['num_6'] ?></li>
                                <li><?= $file_cont['num_7'] ?></li>
                            </ul>
                        </div>
                 </div>

                <div class="div1">  
                    <a class="downloadIcon" href="<?= $file_cont['link_mageia'] ?>" download="Mageia-6-x86_64-DVD.iso"> <i class="fa fa-download" style="color: #0e8390"> </i> Image ISO du DVD Linux Mageia 6 </a>
                    <a href="<?= $file_cont['link_readme'] ?>" download="readme.txt" > <i class="fa fa-download" style="color: #0e8390"> </i> readme.txt </a>
                </div>
            </div>
        </div>

        <div class="fixPadding"> 
        <div class="container"> 
            <div id="servicesMid" class="paddingDownload paddingDwnld">
                <div class="fixPstDoc">
                    <h3  class="testIco" > <span> Documentation </span> </h3>
                           <div class="row" style="margin-left: 7px;" >
                    <div class="col-md-6">
                        <ul class="check-li">
                            <li> 
                              <a href="<?= $file_cont['link_1'] ?>" download="alcasar-3.3.1-exploitation-en.pdf">alcasar-3.3.1-exploitation-en.pdf  </a>
                            </li>
                            <li> 
                              <a href="<?= $file_cont['link_2'] ?>" download="alcasar-3.3.1-installation-en.pdf">alcasar-3.3.1-installation-en.pdf  </a>
                            </li>
                            <li> 
                             <a href="<?= $file_cont['link_3'] ?>" download="alcasar-3.3.1-presentation-en.pdf">alcasar-3.3.1-presentation-en.pdf </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="check-li">
                           <li>
                           <a href="<?= $file_cont['link_4'] ?>" download="alcasar-3.3.1-exploitation-fr.pdf" >alcasar-3.3.1-exploitation-fr.pdf</a>
                           </li>
                            <li> 
                              <a href="<?= $file_cont['link_5'] ?>" download="alcasar-3.3.1-installation-fr.pdf">alcasar-3.3.1-installation-fr.pdf</a>
                            </li>
                            <li> 
                              <a href="<?= $file_cont['link_6'] ?>" download="alcasar-3.3.1-presentation-fr.pdf">alcasar-3.3.1-presentation-fr.pdf</a>
                            </li>

                        </ul>
                    </div>

                    <i class="fa fa-download" style="color: #0e8390; margin-left: 5%; margin-top: 5%"> </i><a href="<?= $file_cont['link_7'] ?>" download="alcasar-3.3.1-technique.pdf">alcasar-3.3.1-technique.pdf</a>
                     <i class="fa fa-download" style="color: #0e8390; margin-left: 5%;"> </i><a href="<?= $file_cont['link_8'] ?>" download="changelog">changelog</a>

                 </div>

                    
            </div>


        </div> 

           <div class="container">        
            <div id="servicesMidBis" class="paddingDownload resizeContainer">
     
                <div class="fixPstDoc">
                    <h3  class="testIco" > <span> Documentation-additional </span> </h3>
                           <div class="row" style="margin-left: 7px;" >
                    <div class="col-md-6">
                        <ul class="check-li">
                            <li>
                              <a href="<?= $file_cont['link_9'] ?>" download="Présentation-FIC2016.pdf">Présentation-FIC2016 </a>
                            </li>
                            <li>
                              <a href="<?= $file_cont['link_10'] ?>" download="Rapport - François CROSNIER - Sonde Netflow_Nfen.pdf">Rapport - François CROSNIER - Sonde Netflow_Nfsen </a>
                            </li>
                            <li>
                              <a href="<?= $file_cont['link_11'] ?>" download="Rapport - Jean-Baptiste COUPRIT - Réarchitecture parefeu (IPSET)">Rapport - Jean-Baptiste COUPRIT - Réarchitecture parefeu (IPSET)</a>
                            </li>
                            <li>
                              <a href="<?= $file_cont['link_12'] ?>" download="Rapport - Raphael PION - Évolutions ALCASAR V3"> Rapport - Raphael PION - Évolutions ALCASAR V3</a>
                            </li>
                             <li>
                              <a href="<?= $file_cont['link_13'] ?>" download="Rapport - Jérémy GUIGUELAY - Installation Mairie St Brieuc.pdf">Rapport - Jérémy GUIGUELAY - Installation Mairie St Brieuc </a>
                            </li>
                            <li>
                              <a href="<?= $file_cont['link_14'] ?>" download="Rapport - Nicolas AUBRY - Enregistrement par SMS.pdf">Rapport - Nicolas AUBRY - Enregistrement par SMS </a>
                            </li>
                            
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="check-li">
                            <li>
                               <a href="<?= $file_cont['link_15'] ?>" download="Rapport - Olivier HOUSSENBAY - 802.1x.pdf">Rapport - Olivier HOUSSENBAY - 802.1x </a>
                              </li>
                          <li>
                              <a href="<?= $file_cont['link_16'] ?>" download="Tutoriel_alcasar_Utilisation_d\'une_clé_3G-4G_sur_une_VM.pdf">Tutoriel - Johan RABOUIN - Utilisation d\'une clé 3G-4G sur une VM </a>
                            </li>
                            <li>
                               <a href="<?= $file_cont['link_17'] ?>" download="Tutoriel_Alcasar_virtualisation.pdf">Tutoriel VirtualHere </a>
                              </li>
                            <li>
                                <a href="<?= $file_cont['link_18'] ?>" download="Tutoriel_Alcasar_Active_Directory.pdf">Tutoriel - Matthias Leclair - Connexion ALCASAR avec un AD </a>
                              </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> 


        </div>

    </div> 
</div>




<?php

  require "footer.php";
?>
