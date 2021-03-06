<?php

$config = array(

    // This is a authentication source which handles admin authentication.
    'admin' => array(
        // The default is to use core:AdminPassword, but it can be replaced with
        // any authentication source.

        'core:AdminPassword',
    ),


    'default-sp' => array(
        'saml:SP',
        'privatekey' => 'prod.pem',
        'certificate' => 'prod.crt',
        'entityID' => 'https://prod.as.cornell.edu/',
        'idp' => 'https://shibidp.cit.cornell.edu/idp/shibboleth',
        // The URL to the discovery service.
        // Can be NULL/unset, in which case a builtin discovery service will be used.
        //'discoURL' => null,
    ),
    'as-sp' => array(
        'saml:SP',
        'privatekey' => 'prod.pem',
        'certificate' => 'prod.crt',
        'entityID' => 'https://as.cornell.edu/',
        'idp' => 'https://shibidp.cit.cornell.edu/idp/shibboleth',
    ),
    'communications-sp' => array(
        'saml:SP',
        'privatekey' => 'prod.pem',
        'certificate' => 'prod.crt',
        'entityID' => 'https://communications.as.cornell.edu/',
        'idp' => 'https://shibidp.cit.cornell.edu/idp/shibboleth',
    ),
    'latino-sp' => array(
        'saml:SP',
        'privatekey' => 'prod.pem',
        'certificate' => 'prod.crt',
        'entityID' => 'https://latino.cornell.edu/',
        'idp' => 'https://shibidp.cit.cornell.edu/idp/shibboleth',
    ),
    'pma-sp' => array(
        'saml:SP',
        'privatekey' => 'prod.pem',
        'certificate' => 'prod.crt',
        'entityID' => 'https://pma.cornell.edu/',
        'idp' => 'https://shibidp.cit.cornell.edu/idp/shibboleth',
    ),
    'anthro-sp' => array(
        'saml:SP',
        'privatekey' => 'prod.pem',
        'certificate' => 'prod.crt',
        'entityID' => 'https://anthropology.cornell.edu/',
        'idp' => 'https://shibidp.cit.cornell.edu/idp/shibboleth',
    ),
    'ling-sp' => array(
        'saml:SP',
        'privatekey' => 'prod.pem',
        'certificate' => 'prod.crt',
        'entityID' => 'https://linguistics.cornell.edu/',
        'idp' => 'https://shibidp.cit.cornell.edu/idp/shibboleth',
    ),
    'chem-sp' => array(
        'saml:SP',
        'privatekey' => 'prod.pem',
        'certificate' => 'prod.crt',
        'entityID' => 'https://chemistry.cornell.edu/',
        'idp' => 'https://shibidp.cit.cornell.edu/idp/shibboleth',
    ),
    'eeb-sp' => array(
        'saml:SP',
        'privatekey' => 'prod.pem',
        'certificate' => 'prod.crt',
        'entityID' => 'https://ecologyandevolution.cornell.edu/',
        'idp' => 'https://shibidp.cit.cornell.edu/idp/shibboleth',
    ),
    'class-sp' => array(
        'saml:SP',
        'privatekey' => 'prod.pem',
        'certificate' => 'prod.crt',
        'entityID' => 'https://classics.cornell.edu/',
        'idp' => 'https://shibidp.cit.cornell.edu/idp/shibboleth',
    ),
    'nes-sp' => array(
        'saml:SP',
        'privatekey' => 'prod.pem',
        'certificate' => 'prod.crt',
        'entityID' => 'https://neareasternstudies.cornell.edu',
        'idp' => 'https://shibidp.cit.cornell.edu/idp/shibboleth',
    ),
    'asrc-sp' => array(
        'saml:SP',
        'privatekey' => 'prod.pem',
        'certificate' => 'prod.crt',
        'entityID' => 'https://africana.cornell.edu/',
        'idp' => 'https://shibidp.cit.cornell.edu/idp/shibboleth',
    ),
    'phil-sp' => array(
        'saml:SP',
        'privatekey' => 'prod.pem',
        'certificate' => 'prod.crt',
        'entityID' => 'https://philosophy.cornell.edu/',
        'idp' => 'https://shibidp.cit.cornell.edu/idp/shibboleth',
    ),
    'jewst-sp' => array(
        'saml:SP',
        'privatekey' => 'prod.pem',
        'certificate' => 'prod.crt',
        'entityID' => 'https://jewishstudies.cornell.edu/',
        'idp' => 'https://shibidp-test.cit.cornell.edu/idp/shibboleth',
    ),
    'hist-sp' => array(
        'saml:SP',
        'privatekey' => 'prod.pem',
        'certificate' => 'prod.crt',
        'entityID' => 'https://history.cornell.edu/',
        'idp' => 'https://shibidp.cit.cornell.edu/idp/shibboleth',
    ),
    'relst-sp' => array(
        'saml:SP',
        'privatekey' => 'prod.pem',
        'certificate' => 'prod.crt',
        'entityID' => 'https://religious-studies.cornell.edu/',
        'idp' => 'https://shibidp.cit.cornell.edu/idp/shibboleth',
    ),
    'govt-sp' => array(
        'saml:SP',
        'privatekey' => 'prod.pem',
        'certificate' => 'prod.crt',
        'entityID' => 'https://government.cornell.edu/',
        'idp' => 'https://shibidp.cit.cornell.edu/idp/shibboleth',
    ),
    'asian-sp' => array(
        'saml:SP',
        'privatekey' => 'prod.pem',
        'certificate' => 'prod.crt',
        'entityID' => 'https://asianstudies.cornell.edu/',
        'idp' => 'https://shibidp.cit.cornell.edu/idp/shibboleth',
    ),
    'physics-sp' => array(
        'saml:SP',
        'privatekey' => 'prod.pem',
        'certificate' => 'prod.crt',
        'entityID' => 'https://physics.cornell.edu/',
        'idp' => 'https://shibidp.cit.cornell.edu/idp/shibboleth',
    ),
    'engl-sp' => array(
        'saml:SP',
        'privatekey' => 'prod.pem',
        'certificate' => 'prod.crt',
        'entityID' => 'https://english.cornell.edu/',
        'idp' => 'https://shibidp.cit.cornell.edu/idp/shibboleth',
    ),
    'people-sp' => array(
        'saml:SP',
        'privatekey' => 'prod.pem',
        'certificate' => 'prod.crt',
        'entityID' => 'https://people.as.cornell.edu/',
        'idp' => 'https://shibidp.cit.cornell.edu/idp/shibboleth',
    ),
    'caps-sp' => array(
        'saml:SP',
        'privatekey' => 'prod.pem',
        'certificate' => 'prod.crt',
        'entityID' => 'https://caps.cornell.edu/',
        'idp' => 'https://shibidp.cit.cornell.edu/idp/shibboleth',
    ),
    'complit-sp' => array(
        'saml:SP',
        'privatekey' => 'prod.pem',
        'certificate' => 'prod.crt',
        'entityID' => 'https://complit.cornell.edu/',
        'idp' => 'https://shibidp.cit.cornell.edu/idp/shibboleth',
    ),
    'sts-sp' => array(
        'saml:SP',
        'privatekey' => 'prod.pem',
        'certificate' => 'prod.crt',
        'entityID' => 'https://sts.cornell.edu/',
        'idp' => 'https://shibidp.cit.cornell.edu/idp/shibboleth',
    ),
    'aas-sp' => array(
        'saml:SP',
        'privatekey' => 'prod.pem',
        'certificate' => 'prod.crt',
        'entityID' => 'https://asianamericanstudies.cornell.edu/',
        'idp' => 'https://shibidp.cit.cornell.edu/idp/shibboleth',
    ),
    'arth-sp' => array(
        'saml:SP',
        'privatekey' => 'prod.pem',
        'certificate' => 'prod.crt',
        'entityID' => 'https://arthistory.cornell.edu/',
        'idp' => 'https://shibidp.cit.cornell.edu/idp/shibboleth',
    ),
    'bionb-sp' => array(
        'saml:SP',
        'privatekey' => 'prod.pem',
        'certificate' => 'prod.crt',
        'entityID' => 'https://nbb.cornell.edu/',
        'idp' => 'https://shibidp.cit.cornell.edu/idp/shibboleth',
    ),
    'knight-sp' => array(
        'saml:SP',
        'privatekey' => 'prod.pem',
        'certificate' => 'prod.crt',
        'entityID' => 'https://knight.as.cornell.edu/',
        'idp' => 'https://shibidp.cit.cornell.edu/idp/shibboleth',
    ),
    'gerst-sp' => array(
        'saml:SP',
        'privatekey' => 'prod.pem',
        'certificate' => 'prod.crt',
        'entityID' => 'https://german.cornell.edu/',
        'idp' => 'https://shibidp.cit.cornell.edu/idp/shibboleth',
    ),
    'archaeology-sp' => array(
        'saml:SP',
        'privatekey' => 'prod.pem',
        'certificate' => 'prod.crt',
        'entityID' => 'https://archaeology.cornell.edu/',
        'idp' => 'https://shibidp.cit.cornell.edu/idp/shibboleth',
    ),
    'music-sp' => array(
        'saml:SP',
        'privatekey' => 'prod.pem',
        'certificate' => 'prod.crt',
        'entityID' => 'https://music.cornell.edu/',
        'idp' => 'https://shibidp.cit.cornell.edu/idp/shibboleth',
    ),
    'sochum-sp' => array(
        'saml:SP',
        'privatekey' => 'prod.pem',
        'certificate' => 'prod.crt',
        'entityID' => 'https://societyhumanities.as.cornell.edu/',
        'idp' => 'https://shibidp.cit.cornell.edu/idp/shibboleth',
    ),
    'econ-sp' => array(
        'saml:SP',
        'privatekey' => 'prod.pem',
        'certificate' => 'prod.crt',
        'entityID' => 'https://economics.cornell.edu/',
        'idp' => 'https://shibidp.cit.cornell.edu/idp/shibboleth',
    ),
    'romance-sp' => array(
        'saml:SP',
        'privatekey' => 'prod.pem',
        'certificate' => 'prod.crt',
        'entityID' => 'https://romancestudies.cornell.edu/',
        'idp' => 'https://shibidp.cit.cornell.edu/idp/shibboleth',
    ),
    'fgss-sp' => array(
        'saml:SP',
        'privatekey' => 'prod.pem',
        'certificate' => 'prod.crt',
        'entityID' => 'https://fgss.cornell.edu/',
        'idp' => 'https://shibidp.cit.cornell.edu/idp/shibboleth',
    ),
    'lgbt-sp' => array(
        'saml:SP',
        'privatekey' => 'prod.pem',
        'certificate' => 'prod.crt',
        'entityID' => 'https://lgbt.cornell.edu/',
        'idp' => 'https://shibidp.cit.cornell.edu/idp/shibboleth',
    ),
    'americanstudies-sp' => array(
        'saml:SP',
        'privatekey' => 'prod.pem',
        'certificate' => 'prod.crt',
        'entityID' => 'https://americanstudies.cornell.edu/',
        'idp' => 'https://shibidp.cit.cornell.edu/idp/shibboleth',
    ),
    'soc-sp' => array(
        'saml:SP',
        'privatekey' => 'prod.pem',
        'certificate' => 'prod.crt',
        'entityID' => 'https://sociology.cornell.edu/',
        'idp' => 'https://shibidp.cit.cornell.edu/idp/shibboleth',
    ),
    'psych-sp' => array(
        'saml:SP',
        'privatekey' => 'prod.pem',
        'certificate' => 'prod.crt',
        'entityID' => 'https://psychology.cornell.edu/',
        'idp' => 'https://shibidp.cit.cornell.edu/idp/shibboleth',
    ),
    'igcs-sp' => array(
        'saml:SP',
        'privatekey' => 'prod.pem',
        'certificate' => 'prod.crt',
        'entityID' => 'https://igcs.cornell.edu/',
        'idp' => 'https://shibidp.cit.cornell.edu/idp/shibboleth',
    ),
    'math-sp' => array(
        'saml:SP',
        'privatekey' => 'prod.pem',
        'certificate' => 'prod.crt',
        'entityID' => 'https://math.cornell.edu/',
        'idp' => 'https://shibidp.cit.cornell.edu/idp/shibboleth',
    ),
    'medieval-sp' => array(
        'saml:SP',
        'privatekey' => 'prod.pem',
        'certificate' => 'prod.crt',
        'entityID' => 'https://medievalstudies.cornell.edu/',
        'idp' => 'https://shibidp.cit.cornell.edu/idp/shibboleth',
    ),
    'astro-sp' => array(
        'saml:SP',
        'privatekey' => 'prod.pem',
        'certificate' => 'prod.crt',
        'entityID' => 'https://astro.cornell.edu/',
        'idp' => 'https://shibidp.cit.cornell.edu/idp/shibboleth',
    ),
    'astror-sp' => array(
        'saml:SP',
        'privatekey' => 'prod.pem',
        'certificate' => 'prod.crt',
        'entityID' => 'https://research.astro.cornell.edu/',
        'idp' => 'https://shibidp.cit.cornell.edu/idp/shibboleth',
    ),
    'milstein-sp' => array(
        'saml:SP',
        'privatekey' => 'prod.pem',
        'certificate' => 'prod.crt',
        'entityID' => 'https://milstein-program.as.cornell.edu/',
        'idp' => 'https://shibidp.cit.cornell.edu/idp/shibboleth',
    ),
    'lrc-sp' => array(
        'saml:SP',
        'privatekey' => 'prod.pem',
        'certificate' => 'prod.crt',
        'entityID' => 'https://lrc.cornell.edu/',
        'idp' => 'https://shibidp.cit.cornell.edu/idp/shibboleth',
    ),
    'organ-sp' => array(
        'saml:SP',
        'privatekey' => 'prod.pem',
        'certificate' => 'prod.crt',
        'entityID' => 'https://baroqueorgan.cornell.edu/',
        'idp' => 'https://shibidp.cit.cornell.edu/idp/shibboleth',
    ),
    'mediastudies-sp' => array(
        'saml:SP',
        'privatekey' => 'prod.pem',
        'certificate' => 'prod.crt',
        'entityID' => 'https://mediastudies.as.cornell.edu/',
        'idp' => 'https://shibidp.cit.cornell.edu/idp/shibboleth',
    ),
    'cinema-sp' => array(
        'saml:SP',
        'privatekey' => 'prod.pem',
        'certificate' => 'prod.crt',
        'entityID' => 'https://cinema.cornell.edu/',
        'idp' => 'https://shibidp.cit.cornell.edu/idp/shibboleth',
    ),
    'cder-sp' => array(
        'saml:SP',
        'privatekey' => 'prod.pem',
        'certificate' => 'prod.crt',
        'entityID' => 'https://cder.as.cornell.edu/',
        'idp' => 'https://shibidp.cit.cornell.edu/idp/shibboleth',
    ),
    'rural-sp' => array(
        'saml:SP',
        'privatekey' => 'prod.pem',
        'certificate' => 'prod.crt',
        'entityID' => 'https://rural.as.cornell.edu/',
        'idp' => 'https://shibidp.cit.cornell.edu/idp/shibboleth',
    ),
    'sagan-sp' => array(
        'saml:SP',
        'privatekey' => 'prod.pem',
        'certificate' => 'prod.crt',
        'entityID' => 'https://carlsaganinstitute.cornell.edu/',
        'idp' => 'https://shibidp.cit.cornell.edu/idp/shibboleth',
    ),
    'sct-sp' => array(
    'saml:SP',
    'privatekey' => 'prod.pem',
    'certificate' => 'prod.crt',
    'entityID' => 'https://sct.cornell.edu/',
    'idp' => 'https://shibidp.cit.cornell.edu/idp/shibboleth',
    ),
    'inequality-sp' => array(
        'saml:SP',
        'privatekey' => 'prod.pem',
        'certificate' => 'prod.crt',
        'entityID' => 'https://inequality.cornell.edu/',
        'idp' => 'https://shibidp.cit.cornell.edu/idp/shibboleth',
    ),
    'frenchstudies-sp' => array(
        'saml:SP',
        'privatekey' => 'prod.pem',
        'certificate' => 'prod.crt',
        'entityID' => 'https://frenchstudies.cornell.edu/',
        'idp' => 'https://shibidp.cit.cornell.edu/idp/shibboleth',
    ),
    'cogsci-sp' => array(
        'saml:SP',
        'privatekey' => 'prod.pem',
        'certificate' => 'prod.crt',
        'entityID' => 'https://cogsci.cornell.edu/',
        'idp' => 'https://shibidp.cit.cornell.edu/idp/shibboleth',
    ),

// Entries below are directed to TEST server, which doesn't require registered metadata to return credentials
    'dev-sp' => array(
        'saml:SP',
        'privatekey' => 'dev.pem',
        'certificate' => 'dev.crt',
        'entityID' => 'https://dev.as.cornell.edu/',
        'idp' => 'https://shibidp-test.cit.cornell.edu/idp/shibboleth',
    ),
    'budget-sp' => array(
        'saml:SP',
        'privatekey' => 'prod.pem',
        'certificate' => 'prod.crt',
        'entityID' => 'https://budgetdev.as.cornell.edu',
        'idp' => 'https://shibidp-test.cit.cornell.edu/idp/shibboleth',
    ),

);
