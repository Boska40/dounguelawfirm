@extends('layouts.master')

@section('content')

@session('success')
    
@endsession

{{-- <div class="totop"><img src="./images/tools-icons/arrow-up.svg" alt=""></div> --}}
<a class="whatsapp" href="https://wa.me/+237657593897" target="_blank">
    <img src="./images/tools-icons/whatsapp-logo.png" alt="">
</a>
<div class="hero" style="background-image: url(./images/activities/MSN-1280-x-720-11.webp);">
    <div class="shadow_box">
        <div class="text_intro">
            <h1>Cabinet d'avocats <br>DOUNGUE & PARTNERS</h1>
            <p>Assiste les particuliers et les entreprises depuis plus de 10 ans</p>
            <p>Appelez-nous dès maintenant au</p>
            <p class="number">+237 657 593 897</p>
        </div>
        <div class="contact_form">
            <form action="people" method="post">
                @csrf
                <div>
                    <h2 style="color: #05244d;">Une urgence,</h2>
                    <p style="font-weight: bold; color: #05244d; margin-top: -1rem;">Nous vous assistons
                        immédiatement</p>
                    <p>Remplissez correctement ce formulaire et nous vous recontacterons dans les prochaines
                        24h.</p>
                    <input type="text" placeholder="Nom complet :" name="name" required>
                    <input type="email" placeholder="Adresse e-mail :" name="email" required>
                    <input type="tel" placeholder="Numéro de téléphone :" name="phone" required>
                    <input type="submit" value="ENVOYER" name="submitBTN" style=" color: #fff;background: #ffbd59;cursor: pointer;transition: .3s ease-in;">
                </div>
            </form>
        </div>
    </div>
</div>
<div class="intro">
    <div class="profile" data-aos="fade-down" style="background-image: url(./images/activities/maitre.jpeg);">
    </div>
    <div class="describe" data-aos="fade-up">
        <h3 style="color: #ffbd59; margin-top: 1rem;">NOTRE CABINET</h3>
        <h2 style="font-family: 'Baskerville'; font-size: 3rem; font-weight: bold;">Maitre Corentin DOUNGUE</h2>
        <p style="color: #85929e; margin-bottom: 2rem;">Avocat aux barreaux du Cameroun et de la Gambie</p>
        <p style="margin-bottom: 1rem; font-weight: bold;">"L'avocat c'est quelqu'un qu'il faut voir avant pour
            éviter les ennuis après"</p>
        <p style="text-align: justify; margin-bottom:5rem;">Notre philosophie est de pouvoir accompagner
            de manière pédagogue, personnelle et transparente chacun de nos clients afin de construire une
            relation de confiance favorisant au mieux la défense de leurs intérêts.</p>
        <p
            style="font-family: 'Dancing Script'; font-weight: bold; font-size: 2rem; color: #05244d; text-align: center;">
            C S DOUNGUE Esq</p>
    </div>
</div>

<div id="about">
    <h2 data-aos="fade-up">QUI SOMMES-NOUS ?</h2>
    <div class="about_item" data-aos="fade-down">
        <div class="logobox"><img src="./images/logo/Logo1 DOUNGUE&PARTNER.png" alt="logo"></div>
        <div class="text">
            <p><span>DOUNGUE & PARTNERS </span> est un cabinet d'avocats... Lorem ipsum dolor, sit amet
                consectetur adipisicing elit. Adipisci tempore, est iusto magnam voluptatum, omnis magni id
                dolorem quo officiis mollitia corporis hic explicabo blanditiis accusantium nobis optio illum
                perspiciatis!</p>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minus, reprehenderit aut cupiditate
                numquam eveniet omnis repudiandae repellendus recusandae similique commodi, id assumenda tempora
                debitis obcaecati quasi deleniti nesciunt autem eius accusantium adipisci nobis sed
                consequuntur. Quod laboriosam reprehenderit, nulla magni ex necessitatibus exercitationem ut
                laborum cum optio facere, nesciunt consectetur?</p>

        </div>
    </div>
    <div class="textes" data-aos="fade-up" style="margin-top: 1rem;">
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum obcaecati adipisci incidunt quaerat
            unde sed maiores quas consequuntur reprehenderit eligendi distinctio temporibus minima ipsam
            sapiente sequi doloribus, hic tenetur voluptate asperiores. Veritatis minima deleniti corrupti
            voluptatibus, debitis voluptas architecto dolorum fugit nulla animi consectetur, quisquam assumenda.
            Tempore voluptatum provident eos aliquid, maiores facere sit minima suscipit eum assumenda
            accusantium, reprehenderit ex excepturi praesentium deserunt possimus at eaque! Sunt aperiam sit
            necessitatibus, consectetur, labore commodi tenetur similique eius fuga esse, repudiandae veniam
            dolorem corrupti aliquam. Corporis fugiat, iste molestias explicabo odio labore voluptate
            consectetur inventore? Eaque ipsa ex provident nesciunt consectetur.</p>
    </div>
</div>

<div id="domains">
    <h2 data-aos="fade-up">NOTRE EXPERTISE</h2>
    <p>Le cabinet DOUNGUE & PARTNERS a vocation à intervenir en matière de conseil et de contentieux dans
        plusieurs domaines. Il s'agit évidemment de :</p>
    <div class="domain_item">
        <div class="item" data-aos="fade-up">
            <h3>DROIT Pénal</h3>
            <img src="./images/logo/penal.jpg" alt="">
            <p>Le droit pénal est la branche du droit qui définit les infractions, les classe selon leur gravité
                et fixe leurs sanctions. Le droit pénal doit être distingué du droit civil. Voici l’essentiel de
                ce qu’il faut savoir sur le droit pénal et sur quelques-unes des infractions les plus fréquentes
                : le vol, le harcèlement, l’escroquerie, l’abus de confiance et l’homicide. Consultez un avocat
                spécialisé en droit pénal pour avoir des avis éclairés sur le sujet.</p>
        </div>
        <div class="item" data-aos="fade-up">
            <h3>droit de la famille</h3>
            <img src="./images/logo/family.jpg" alt="">
            <p>Le droit de la famille est une branche large du droit civil incluant l’ensemble des règles
                juridiques régissant les rapports familiaux : séparations du couple (mariés, pacsés ou
                simplement concubins), le droit des grands-parents, l’adoption, la filiation et les majeurs
                protégés.</p>
        </div>
        <div class="item" data-aos="fade-up">
            <h3>DROIT immobilier</h3>
            <img src="./images//logo/immobilier.jpg" alt="">
            <p>Le droit immobilier est une branche du droit des biens. Relatif aux biens immobiliers et à leur
                gestion, il est rattaché au droit privé et au droit public. Le droit immobilier peut aussi
                concerner d’autres domaines, pour ne citer que le droit de la copropriété et le droit de la
                construction.</p>
        </div>
        <div class="item" data-aos="fade-up">
            <h3>DROIT des sociétés</h3>
            <img src="./images/logo/societe.jpg" alt="">
            <p>Le droit des sociétés constitue une branche essentielle du droit des affaires. Elle est régie par
                un ensemble de règles et de réglementations qui encadrent la création, la constitution, le
                fonctionnement et la dissolution des entités commerciales et des entreprises. Cette discipline
                juridique englobe un large éventail de formes de sociétés, telles que les sociétés anonymes, les
                sociétés à responsabilité limitée, les sociétés par actions, les sociétés civiles.</p>
        </div>
        <div class="item" data-aos="fade-up">
            <h3>DROIT commercial</h3>
            <img src="./images/logo/commercial.jpg" alt="">
            <p>Le droit commercial est la partie du droit privé qui traite de l'exercice de la profession de
                commerçant et qui forme le système juridique applicable aux actes de commerce. Ainsi, il régit
                l'activité des commerçants (conception subjective du droit commercial), mais il s'applique
                également aux non-commerçants quand ils accomplissent un acte de commerce de manière
                occasionnelle (conception objective du droit commercial).</p>
        </div>
        <div class="item" data-aos="fade-up">
            <h3>DROIT des affaires</h3>
            <img src="./images/logo/affaires.jpg" alt="">
            <p>Le droit des affaires est une notion aux contours relativement flous. Il s'agit d'un ensemble de
                règles applicables aux entreprises, à leurs relations entre elles, mais aussi plus généralement
                à la vie des affaires. C'est donc une branche du droit privé (même s'il existe par ailleurs un «
                droit public des affaires »).</p>
        </div>
        <div class="item" data-aos="fade-up">
            <h3>DROIT de la nationalité</h3>
            <img src="./images/logo/nationality.jpg" alt="">
            <p>Le droit à une nationalité est un droit de l’homme fondamental. Il implique le droit d’acquérir
                une nationalité, de la conserver ou d’en changer. Le droit international dispose que le droit
                des États de décider qui sont leurs nationaux n’est pas absolu et que les États doivent en
                particulier respecter leurs obligations en matière de droits de l’homme en ce qui concerne
                l’octroi et la perte de la nationalité.</p>
        </div>
        <div class="item" data-aos="fade-up">
            <h3>DROIT des assurances</h3>
            <img src="./images/logo/assurances.jpg" alt="">
            <p>Le droit des assurances est une branche du droit privé qui encadre les relations entre les
                parties prenantes dans le contexte de la souscription, de la gestion et de l’exécution d’un
                contrat d’assurance. Il s’applique à tous les types d’assurances, qu’il s’agisse de l’assurance
                vie, l’assurance responsabilité civile, l’assurance automobile ou encore l’assurance habitation.
            </p>
        </div>
        <div class="item" data-aos="fade-up">
            <h3>DROIT foncier</h3>
            <img src="./images/logo/foncier.jpg" alt="">
            <p>Le droit foncier est l'ensemble des règles qui régissent les propriétés qu'elles soient publiques
                ou privées. Avant tout, il importe d'étudier la classification des terres. Il y a les terres
                relevant du domaine de l'État (terre domaniale) et celle appartenant à des particuliers (terre
                privative). Les terres domaniales se subdivisent en deux catégories, ce sont la terre du domaine
                public et la terre du domaine privé.</p>
        </div>
        <div class="item" data-aos="fade-up">
            <h3>DROIT du travail</h3>
            <img src="./images/logo/work.jpg" alt="">
            <p>Le droit du travail est un domaine juridique qui régit les relations entre employeurs et salariés
                dans le secteur privé. Il encadre divers aspects du milieu professionnel comme les contrats de
                travail, la rémunération, les heures de travail, les congés, la discipline, le licenciement, et
                bien plus. Ce droit vise à équilibrer les relations entre employeur et employé, tout en
                s’adaptant constamment aux évolutions sociales, économiques et politiques. </p>
        </div>
    </div>
</div>

<div id="activities">
    <h2 data-aos="fade-up">NOS ACTIVITés</h2>
    <p style="margin-bottom: 3rem; color: #85929e; text-align: center;">Nous intervenons lors des émissions radio et télé afin d'apporter notre expertise en édifiant le public sur l'application du droit dans la vie quotidienne.</p>
    <article data-aos="fade-up">
        <div class="title">
            <h4>EMISSION DU 1er JUILLET 2024 BALAFON TV PRESENTEE PAR BLANCHE BITGA</h4>
            <p style="text-align: justify;">Thème : Hécatombe sur nos routes, qui paie pour les vies perdues et celles détruites ? <br>
            https://www.facebook.com/share/v/tWGYCWx7gF2SxxUL/?mibextid=xfxF2i</p>
            <span style="color: #85929e; font-style: italic;">Publié par Corentin DOUNGUE | Le 02 Juillet 2024 à
                15h43</span>
        </div>
        <div class="file">
            <img src="./images/activities/balafon1.jpg" alt="balafon1">
        </div>
    </article>
    <article data-aos="fade-up">
        <div class="title">
            <h4>EMISSION DU 14 JUIN 2024 BALAFON TV PRESENTEE PAR CLAUDE MAYO</h4>
            <p style="text-align: justify;">Thème : fonction publique camerounaise, quand le serviteur devient roi. <br> 
            https://www.facebook.com/share/v/6QFAd6MY3rndXuQz/</p>
            <span style="color: #85929e; font-style: italic;">Publié par Corentin DOUNGUE | Le 15 Juin 2024 à
                10h21</span>
        </div>
        <div class="file">
            <img src="./images/activities/balafon2.jpg" alt="balafon2">
        </div>
    </article>
    <article data-aos="fade-up">
        <div class="title">
            <h4>Cameroun Info – Insolite: Un homme convoqué à la gendarmerie, dans les commissariats et au Parquet à Douala, près de 30 fois en deux ans</h4>
            <p style="text-align: justify;">
            Jules Mbida Mbezele subit l’acharnement de son frère consanguin Pierre Ebanda en conflit avec lui depuis plusieurs années dans le cadre d’une affaire de succession familiale. <br>
            Jeudi, 26 Août 2021, il est 15 heures. Nous sommes  à Afrique Hôtel, un établissement touristique situé dans le 3ème arrondissement de la ville de Douala. L’une de ses salles accueille une conférence de presse.  Elle n’est pas comme les autres. Ce sont des membres d’une famille polygamique qui ont réuni les journalistes pour leur parler des problèmes qu’ils rencontrent. Ces jeunes, femmes  et tout-petits sont entourés de leur conseil Me Corentin Doungue, avocat aux barreaux du Cameroun et de Gambie. Au cours de leur communication, le nom Jules Mbida Mbezele est souvent entendu.  C’est l’un des membres de cette fratrie détenu en ce moment à la prison centrale de Ngoumou "depuis deux semaines"  Il est poursuivi pour  "coups et blessures en coaction" par son frère consanguin Pierre Ebanda.
            <a href="https://www.cameroon-info.net/article/cameroun-insolite-un-homme-convoque-a-la-gendarmerie-dans-les-commissariats-et-au-parquet-404022.html">Lire l'article complet</a>
            </p>
            <span style="color: #85929e; font-style: italic;">YAOUNDE 27 Aout 2021  15h00 | Rédigé et publié par Pierre Arnaud NTCHAPDA, Cameroon-Info.Net</span>
        </div>
        <div class="file">
            <img src="./images/activities/Conférence_de_presse_4_cameroon-info-p-net_800xm9x.jpg" alt="Conférence_de_presse_4_cameroon-info-p-net_800xm9x">
        </div>
    </article>
</div>

<div class="statistics">
    <h2 data-aos="fade-up">Nos chiffres</h2>
    <p style="margin-bottom: 1rem; text-align: center; font-weight: bold;">Le cabinet d'avocats DOUNGUE &
        PARTNERS c'est :</p>
    <div class="stats">
        <div class="bloc" data-aos="fade-up">
            <p><span>+100</span> <br>particuliers défendus</p>
        </div>
        <div class="bloc" data-aos="fade-down">
            <p><span>+10</span> <br>entreprises assistées</p>
        </div>
        <div class="bloc" data-aos="fade-up">
            <p><span><a href="https://www.hitwebcounter.com" target="_blank">
                <img src="https://hitwebcounter.com/counter/counter.php?page=14794160&style=0030&nbdigits=4&type=ip&initCount=0" title="Counter Widget" Alt="Visit counter For Websites"   border="0" /></a></span>
                <br>visiteurs sur le site
            </p>
        </div>
    </div>
</div>

<div class="map" style="margin: 3rem 8rem 6rem 8rem; height: 450px; width:auto;" data-aos="fade-down">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3979.875093562388!2d9.697619774471459!3d4.045898446987068!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x106112f345d79c4b%3A0xa8cb5f198b9288ce!2sRue%20Dika%20Mpondo%2C%20Douala!5e0!3m2!1sfr!2scm!4v1721231318336!5m2!1sfr!2scm" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>

@endsection


