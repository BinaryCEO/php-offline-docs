<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: FANN - Manual</title>

      <link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
      <link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
      <link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
      <link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">
  
 <link rel="icon" type="image/svg+xml" sizes="any" href="https://www.php.net/favicon.svg?v=2">
 <link rel="icon" type="image/png" sizes="196x196" href="https://www.php.net/favicon-196x196.png?v=2">
 <link rel="icon" type="image/png" sizes="32x32" href="https://www.php.net/favicon-32x32.png?v=2">
 <link rel="icon" type="image/png" sizes="16x16" href="https://www.php.net/favicon-16x16.png?v=2">
 <link rel="shortcut icon" href="https://www.php.net/favicon.ico?v=2">

 <link rel="search" type="application/opensearchdescription+xml" href="https://www.php.net/phpnetimprovedsearch.src" title="Add PHP.net search">
 <link rel="alternate" type="application/atom+xml" href="https://www.php.net/releases/feed.php" title="PHP Release feed">
 <link rel="alternate" type="application/atom+xml" href="https://www.php.net/feed.atom" title="PHP: Hypertext Preprocessor">

 <link rel="canonical" href="https://www.php.net/manual/en/book.fann.php">
 <link rel="shorturl" href="https://www.php.net/fann">
 <link rel="alternate" href="https://www.php.net/fann" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/refs.basic.other.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.geoip-time-zone-by-country-and-region.php">
 <link rel="next" href="https://www.php.net/manual/en/intro.fann.php">

 <link rel="alternate" href="https://www.php.net/manual/en/book.fann.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/book.fann.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/book.fann.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/book.fann.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/book.fann.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/book.fann.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/book.fann.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/book.fann.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/book.fann.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/book.fann.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/book.fann.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="FANN (Fast Artificial Neural Network)" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: FANN - Manual" />
<meta name="twitter:description" content="FANN (Fast Artificial Neural Network)" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: FANN - Manual" />
<meta itemprop="description" content="FANN (Fast Artificial Neural Network)" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="FANN (Fast Artificial Neural Network)" />

<link href="https://fosstodon.org/@php" rel="me" />
<!-- Matomo -->
<script>
    var _paq = window._paq = window._paq || [];
    /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
    _paq.push(["setDoNotTrack", true]);
    _paq.push(["disableCookies"]);
    _paq.push(['trackPageView']);
    _paq.push(['enableLinkTracking']);
    (function() {
        var u="https://analytics.php.net/";
        _paq.push(['setTrackerUrl', u+'matomo.php']);
        _paq.push(['setSiteId', '1']);
        var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
        g.async=true; g.src=u+'matomo.js'; s.parentNode.insertBefore(g,s);
    })();
</script>
<!-- End Matomo Code -->
</head>
<body class="docs ">

<nav class="navbar navbar-fixed-top">
  <div class="navbar__inner">
    <a href="/" aria-label="PHP Home" class="navbar__brand">
      <img
        src="/images/logos/php-logo-white.svg"
        aria-hidden="true"
        width="80"
        height="40"
      >
    </a>

    <div
      id="navbar__offcanvas"
      tabindex="-1"
      class="navbar__offcanvas"
      aria-label="Menu"
    >
      <button
        id="navbar__close-button"
        class="navbar__icon-item navbar_icon-item--visually-aligned navbar__close-button"
      >
        <svg xmlns="http://www.w3.org/2000/svg" width="24" viewBox="0 0 24 24" fill="currentColor"><path d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z" /></svg>
      </button>

      <ul class="navbar__nav">
                            <li class="navbar__item">
              <a
                href="/downloads.php"
                                class="navbar__link  "
              >
                                  Downloads                              </a>
          </li>
                            <li class="navbar__item">
              <a
                href="/docs.php"
                aria-current="page"                class="navbar__link navbar__link--active "
              >
                                  Documentation                              </a>
          </li>
                            <li class="navbar__item">
              <a
                href="/get-involved.php"
                                class="navbar__link  "
              >
                                  Get Involved                              </a>
          </li>
                            <li class="navbar__item">
              <a
                href="/support.php"
                                class="navbar__link  "
              >
                                  Help                              </a>
          </li>
                            <li class="navbar__item">
              <a
                href="/releases/8.4/index.php"
                                class="navbar__link  navbar__release"
              >
                                  <img src="/images/php8/logo_php8_4.svg" alt="PHP 8.4">
                              </a>
          </li>
              </ul>
    </div>

    <div class="navbar__right">
      
      <!-- Desktop default search -->
      <form
        action="/manual-lookup.php"
        class="navbar__search-form"
      >
        <label for="navbar__search-input" aria-label="Search docs">
          <svg
  xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  width="24"
  viewBox="0 0 24 24"
  fill="none"
  stroke="currentColor"
  stroke-width="2"
  stroke-linecap="round"
  stroke-linejoin="round"
>
  <circle cx="11" cy="11" r="8"></circle>
  <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
</svg>        </label>
        <input
          type="search"
          name="pattern"
          id="navbar__search-input"
          class="navbar__search-input"
          placeholder="Search docs"
          accesskey="s"
        >
        <input type="hidden" name="scope" value="quickref">
      </form>

      <!-- Desktop encanced search -->
      <button
        id="navbar__search-button"
        class="navbar__search-button"
        hidden
      >
        <svg
  xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  width="24"
  viewBox="0 0 24 24"
  fill="none"
  stroke="currentColor"
  stroke-width="2"
  stroke-linecap="round"
  stroke-linejoin="round"
>
  <circle cx="11" cy="11" r="8"></circle>
  <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
</svg>        Search docs
      </button>

      <!-- Mobile default items -->
      <a
        id="navbar__search-link"
        href="/lookup-form.php"
        aria-label="Search docs"
        class="navbar__icon-item navbar__search-link"
      >
        <svg
  xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  width="24"
  viewBox="0 0 24 24"
  fill="none"
  stroke="currentColor"
  stroke-width="2"
  stroke-linecap="round"
  stroke-linejoin="round"
>
  <circle cx="11" cy="11" r="8"></circle>
  <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
</svg>      </a>
      <a
        id="navbar__menu-link"
        href="/menu.php"
        aria-label="Menu"
        class="navbar__icon-item navbar_icon-item--visually-aligned navbar_menu-link"
      >
        <svg xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  width="24"
  viewBox="0 0 24 24"
  fill="currentColor"
>
  <path d="M3,6H21V8H3V6M3,11H21V13H3V11M3,16H21V18H3V16Z" />
</svg>      </a>

      <!-- Mobile enhanced items -->
      <button
        id="navbar__search-button-mobile"
        aria-label="Search docs"
        class="navbar__icon-item navbar__search-button-mobile"
        hidden
      >
        <svg
  xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  width="24"
  viewBox="0 0 24 24"
  fill="none"
  stroke="currentColor"
  stroke-width="2"
  stroke-linecap="round"
  stroke-linejoin="round"
>
  <circle cx="11" cy="11" r="8"></circle>
  <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
</svg>      </button>
      <button
        id="navbar__menu-button"
        aria-label="Menu"
        class="navbar__icon-item navbar_icon-item--visually-aligned"
        hidden
      >
        <svg xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  width="24"
  viewBox="0 0 24 24"
  fill="currentColor"
>
  <path d="M3,6H21V8H3V6M3,11H21V13H3V11M3,16H21V18H3V16Z" />
</svg>      </button>
    </div>

    <div
      id="navbar__backdrop"
      class="navbar__backdrop"
    ></div>
  </div>

  <div id="flash-message"></div>
</nav>
<div class="headsup"><a href='/index.php#2025-09-25-3'>PHP 8.5.0 RC 1 available for testing</a></div>
<nav id="trick"><div><dl>
<dt><a href='/manual/en/getting-started.php'>Getting Started</a></dt>
	<dd><a href='/manual/en/introduction.php'>Introduction</a></dd>
	<dd><a href='/manual/en/tutorial.php'>A simple tutorial</a></dd>
<dt><a href='/manual/en/langref.php'>Language Reference</a></dt>
	<dd><a href='/manual/en/language.basic-syntax.php'>Basic syntax</a></dd>
	<dd><a href='/manual/en/language.types.php'>Types</a></dd>
	<dd><a href='/manual/en/language.variables.php'>Variables</a></dd>
	<dd><a href='/manual/en/language.constants.php'>Constants</a></dd>
	<dd><a href='/manual/en/language.expressions.php'>Expressions</a></dd>
	<dd><a href='/manual/en/language.operators.php'>Operators</a></dd>
	<dd><a href='/manual/en/language.control-structures.php'>Control Structures</a></dd>
	<dd><a href='/manual/en/language.functions.php'>Functions</a></dd>
	<dd><a href='/manual/en/language.oop5.php'>Classes and Objects</a></dd>
	<dd><a href='/manual/en/language.namespaces.php'>Namespaces</a></dd>
	<dd><a href='/manual/en/language.enumerations.php'>Enumerations</a></dd>
	<dd><a href='/manual/en/language.errors.php'>Errors</a></dd>
	<dd><a href='/manual/en/language.exceptions.php'>Exceptions</a></dd>
	<dd><a href='/manual/en/language.fibers.php'>Fibers</a></dd>
	<dd><a href='/manual/en/language.generators.php'>Generators</a></dd>
	<dd><a href='/manual/en/language.attributes.php'>Attributes</a></dd>
	<dd><a href='/manual/en/language.references.php'>References Explained</a></dd>
	<dd><a href='/manual/en/reserved.variables.php'>Predefined Variables</a></dd>
	<dd><a href='/manual/en/reserved.exceptions.php'>Predefined Exceptions</a></dd>
	<dd><a href='/manual/en/reserved.interfaces.php'>Predefined Interfaces and Classes</a></dd>
	<dd><a href='/manual/en/reserved.attributes.php'>Predefined Attributes</a></dd>
	<dd><a href='/manual/en/context.php'>Context options and parameters</a></dd>
	<dd><a href='/manual/en/wrappers.php'>Supported Protocols and Wrappers</a></dd>
</dl>
<dl>
<dt><a href='/manual/en/security.php'>Security</a></dt>
	<dd><a href='/manual/en/security.intro.php'>Introduction</a></dd>
	<dd><a href='/manual/en/security.general.php'>General considerations</a></dd>
	<dd><a href='/manual/en/security.cgi-bin.php'>Installed as CGI binary</a></dd>
	<dd><a href='/manual/en/security.apache.php'>Installed as an Apache module</a></dd>
	<dd><a href='/manual/en/security.sessions.php'>Session Security</a></dd>
	<dd><a href='/manual/en/security.filesystem.php'>Filesystem Security</a></dd>
	<dd><a href='/manual/en/security.database.php'>Database Security</a></dd>
	<dd><a href='/manual/en/security.errors.php'>Error Reporting</a></dd>
	<dd><a href='/manual/en/security.variables.php'>User Submitted Data</a></dd>
	<dd><a href='/manual/en/security.hiding.php'>Hiding PHP</a></dd>
	<dd><a href='/manual/en/security.current.php'>Keeping Current</a></dd>
<dt><a href='/manual/en/features.php'>Features</a></dt>
	<dd><a href='/manual/en/features.http-auth.php'>HTTP authentication with PHP</a></dd>
	<dd><a href='/manual/en/features.cookies.php'>Cookies</a></dd>
	<dd><a href='/manual/en/features.sessions.php'>Sessions</a></dd>
	<dd><a href='/manual/en/features.file-upload.php'>Handling file uploads</a></dd>
	<dd><a href='/manual/en/features.remote-files.php'>Using remote files</a></dd>
	<dd><a href='/manual/en/features.connection-handling.php'>Connection handling</a></dd>
	<dd><a href='/manual/en/features.persistent-connections.php'>Persistent Database Connections</a></dd>
	<dd><a href='/manual/en/features.commandline.php'>Command line usage</a></dd>
	<dd><a href='/manual/en/features.gc.php'>Garbage Collection</a></dd>
	<dd><a href='/manual/en/features.dtrace.php'>DTrace Dynamic Tracing</a></dd>
</dl>
<dl>
<dt><a href='/manual/en/funcref.php'>Function Reference</a></dt>
	<dd><a href='/manual/en/refs.basic.php.php'>Affecting PHP's Behaviour</a></dd>
	<dd><a href='/manual/en/refs.utilspec.audio.php'>Audio Formats Manipulation</a></dd>
	<dd><a href='/manual/en/refs.remote.auth.php'>Authentication Services</a></dd>
	<dd><a href='/manual/en/refs.utilspec.cmdline.php'>Command Line Specific Extensions</a></dd>
	<dd><a href='/manual/en/refs.compression.php'>Compression and Archive Extensions</a></dd>
	<dd><a href='/manual/en/refs.crypto.php'>Cryptography Extensions</a></dd>
	<dd><a href='/manual/en/refs.database.php'>Database Extensions</a></dd>
	<dd><a href='/manual/en/refs.calendar.php'>Date and Time Related Extensions</a></dd>
	<dd><a href='/manual/en/refs.fileprocess.file.php'>File System Related Extensions</a></dd>
	<dd><a href='/manual/en/refs.international.php'>Human Language and Character Encoding Support</a></dd>
	<dd><a href='/manual/en/refs.utilspec.image.php'>Image Processing and Generation</a></dd>
	<dd><a href='/manual/en/refs.remote.mail.php'>Mail Related Extensions</a></dd>
	<dd><a href='/manual/en/refs.math.php'>Mathematical Extensions</a></dd>
	<dd><a href='/manual/en/refs.utilspec.nontext.php'>Non-Text MIME Output</a></dd>
	<dd><a href='/manual/en/refs.fileprocess.process.php'>Process Control Extensions</a></dd>
	<dd><a href='/manual/en/refs.basic.other.php'>Other Basic Extensions</a></dd>
	<dd><a href='/manual/en/refs.remote.other.php'>Other Services</a></dd>
	<dd><a href='/manual/en/refs.search.php'>Search Engine Extensions</a></dd>
	<dd><a href='/manual/en/refs.utilspec.server.php'>Server Specific Extensions</a></dd>
	<dd><a href='/manual/en/refs.basic.session.php'>Session Extensions</a></dd>
	<dd><a href='/manual/en/refs.basic.text.php'>Text Processing</a></dd>
	<dd><a href='/manual/en/refs.basic.vartype.php'>Variable and Type Related Extensions</a></dd>
	<dd><a href='/manual/en/refs.webservice.php'>Web Services</a></dd>
	<dd><a href='/manual/en/refs.utilspec.windows.php'>Windows Only Extensions</a></dd>
	<dd><a href='/manual/en/refs.xml.php'>XML Manipulation</a></dd>
	<dd><a href='/manual/en/refs.ui.php'>GUI Extensions</a></dd>
</dl>
<dl>
<dt>Keyboard Shortcuts</dt><dt>?</dt>
<dd>This help</dd>
<dt>j</dt>
<dd>Next menu item</dd>
<dt>k</dt>
<dd>Previous menu item</dd>
<dt>g p</dt>
<dd>Previous man page</dd>
<dt>g n</dt>
<dd>Next man page</dd>
<dt>G</dt>
<dd>Scroll to bottom</dd>
<dt>g g</dt>
<dd>Scroll to top</dd>
<dt>g h</dt>
<dd>Goto homepage</dd>
<dt>g s</dt>
<dd>Goto search<br>(current page)</dd>
<dt>/</dt>
<dd>Focus search box</dd>
</dl></div></nav>
<div id="goto">
    <div class="search">
         <div class="text"></div>
         <div class="results"><ul></ul></div>
   </div>
</div>

  <div id="breadcrumbs" class="clearfix">
    <div id="breadcrumbs-inner">
          <div class="next">
        <a href="intro.fann.php">
          Introduction &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.geoip-time-zone-by-country-and-region.php">
          &laquo; geoip_time_zone_by_country_and_region        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.other.php'>Other Basic Extensions</a></li>      </ul>
    </div>
  </div>




<div id="layout" class="clearfix">
  <section id="layout-content">
  <div class="page-tools">
    <div class="change-language">
      <form action="/manual/change.php" method="get" id="changelang" name="changelang">
        <fieldset>
          <label for="changelang-langs">Change language:</label>
          <select onchange="document.changelang.submit()" name="page" id="changelang-langs">
            <option value='en/book.fann.php' selected="selected">English</option>
            <option value='de/book.fann.php'>German</option>
            <option value='es/book.fann.php'>Spanish</option>
            <option value='fr/book.fann.php'>French</option>
            <option value='it/book.fann.php'>Italian</option>
            <option value='ja/book.fann.php'>Japanese</option>
            <option value='pt_BR/book.fann.php'>Brazilian Portuguese</option>
            <option value='ru/book.fann.php'>Russian</option>
            <option value='tr/book.fann.php'>Turkish</option>
            <option value='uk/book.fann.php'>Ukrainian</option>
            <option value='zh/book.fann.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="book.fann" class="book">
 
 <h1 class="title">FANN (Fast Artificial Neural Network)</h1>
 

 

 






 






 






 






 







<ul class="chunklist chunklist_book"><li><a href="intro.fann.php">Introduction</a></li><li><a href="fann.setup.php">Installing/Configuring</a><ul class="chunklist chunklist_book chunklist_children"><li><a href="fann.requirements.php">Requirements</a></li><li><a href="fann.installation.php">Installation</a></li><li><a href="fann.resources.php">Resource Types</a></li></ul></li><li><a href="fann.constants.php">Predefined Constants</a></li><li><a href="fann.examples.php">Examples</a><ul class="chunklist chunklist_book chunklist_children"><li><a href="fann.examples-1.php">XOR training</a></li></ul></li><li><a href="ref.fann.php">Fann Functions</a><ul class="chunklist chunklist_book chunklist_children"><li><a href="function.fann-cascadetrain-on-data.php">fann_cascadetrain_on_data</a> — Trains on an entire dataset, for a period of time using the Cascade2 training algorithm</li><li><a href="function.fann-cascadetrain-on-file.php">fann_cascadetrain_on_file</a> — Trains on an entire dataset read from file, for a period of time using the Cascade2 training algorithm</li><li><a href="function.fann-clear-scaling-params.php">fann_clear_scaling_params</a> — Clears scaling parameters</li><li><a href="function.fann-copy.php">fann_copy</a> — Creates a copy of a fann structure</li><li><a href="function.fann-create-from-file.php">fann_create_from_file</a> — Constructs a backpropagation neural network from a configuration file</li><li><a href="function.fann-create-shortcut.php">fann_create_shortcut</a> — Creates a standard backpropagation neural network which is not fully connectected and has shortcut connections</li><li><a href="function.fann-create-shortcut-array.php">fann_create_shortcut_array</a> — Creates a standard backpropagation neural network which is not fully connectected and has shortcut connections</li><li><a href="function.fann-create-sparse.php">fann_create_sparse</a> — Creates a standard backpropagation neural network, which is not fully connected</li><li><a href="function.fann-create-sparse-array.php">fann_create_sparse_array</a> — Creates a standard backpropagation neural network, which is not fully connected using an array of layer sizes</li><li><a href="function.fann-create-standard.php">fann_create_standard</a> — Creates a standard fully connected backpropagation neural network</li><li><a href="function.fann-create-standard-array.php">fann_create_standard_array</a> — Creates a standard fully connected backpropagation neural network using an array of layer sizes</li><li><a href="function.fann-create-train.php">fann_create_train</a> — Creates an empty training data struct</li><li><a href="function.fann-create-train-from-callback.php">fann_create_train_from_callback</a> — Creates the training data struct from a user supplied function</li><li><a href="function.fann-descale-input.php">fann_descale_input</a> — Scale data in input vector after get it from ann based on previously calculated parameters</li><li><a href="function.fann-descale-output.php">fann_descale_output</a> — Scale data in output vector after get it from ann based on previously calculated parameters</li><li><a href="function.fann-descale-train.php">fann_descale_train</a> — Descale input and output data based on previously calculated parameters</li><li><a href="function.fann-destroy.php">fann_destroy</a> — Destroys the entire network and properly freeing all the associated memory</li><li><a href="function.fann-destroy-train.php">fann_destroy_train</a> — Destructs the training data</li><li><a href="function.fann-duplicate-train-data.php">fann_duplicate_train_data</a> — Returns an exact copy of a fann train data</li><li><a href="function.fann-get-activation-function.php">fann_get_activation_function</a> — Returns the activation function</li><li><a href="function.fann-get-activation-steepness.php">fann_get_activation_steepness</a> — Returns the activation steepness for supplied neuron and layer number</li><li><a href="function.fann-get-bias-array.php">fann_get_bias_array</a> — Get the number of bias in each layer in the network</li><li><a href="function.fann-get-bit-fail.php">fann_get_bit_fail</a> — The number of fail bits</li><li><a href="function.fann-get-bit-fail-limit.php">fann_get_bit_fail_limit</a> — Returns the bit fail limit used during training</li><li><a href="function.fann-get-cascade-activation-functions.php">fann_get_cascade_activation_functions</a> — Returns the cascade activation functions</li><li><a href="function.fann-get-cascade-activation-functions-count.php">fann_get_cascade_activation_functions_count</a> — Returns the number of cascade activation functions</li><li><a href="function.fann-get-cascade-activation-steepnesses.php">fann_get_cascade_activation_steepnesses</a> — Returns the cascade activation steepnesses</li><li><a href="function.fann-get-cascade-activation-steepnesses-count.php">fann_get_cascade_activation_steepnesses_count</a> — The number of activation steepnesses</li><li><a href="function.fann-get-cascade-candidate-change-fraction.php">fann_get_cascade_candidate_change_fraction</a> — Returns the cascade candidate change fraction</li><li><a href="function.fann-get-cascade-candidate-limit.php">fann_get_cascade_candidate_limit</a> — Return the candidate limit</li><li><a href="function.fann-get-cascade-candidate-stagnation-epochs.php">fann_get_cascade_candidate_stagnation_epochs</a> — Returns the number of cascade candidate stagnation epochs</li><li><a href="function.fann-get-cascade-max-cand-epochs.php">fann_get_cascade_max_cand_epochs</a> — Returns the maximum candidate epochs</li><li><a href="function.fann-get-cascade-max-out-epochs.php">fann_get_cascade_max_out_epochs</a> — Returns the maximum out epochs</li><li><a href="function.fann-get-cascade-min-cand-epochs.php">fann_get_cascade_min_cand_epochs</a> — Returns the minimum candidate epochs</li><li><a href="function.fann-get-cascade-min-out-epochs.php">fann_get_cascade_min_out_epochs</a> — Returns the minimum out epochs</li><li><a href="function.fann-get-cascade-num-candidate-groups.php">fann_get_cascade_num_candidate_groups</a> — Returns the number of candidate groups</li><li><a href="function.fann-get-cascade-num-candidates.php">fann_get_cascade_num_candidates</a> — Returns the number of candidates used during training</li><li><a href="function.fann-get-cascade-output-change-fraction.php">fann_get_cascade_output_change_fraction</a> — Returns the cascade output change fraction</li><li><a href="function.fann-get-cascade-output-stagnation-epochs.php">fann_get_cascade_output_stagnation_epochs</a> — Returns the number of cascade output stagnation epochs</li><li><a href="function.fann-get-cascade-weight-multiplier.php">fann_get_cascade_weight_multiplier</a> — Returns the weight multiplier</li><li><a href="function.fann-get-connection-array.php">fann_get_connection_array</a> — Get connections in the network</li><li><a href="function.fann-get-connection-rate.php">fann_get_connection_rate</a> — Get the connection rate used when the network was created</li><li><a href="function.fann-get-errno.php">fann_get_errno</a> — Returns the last error number</li><li><a href="function.fann-get-errstr.php">fann_get_errstr</a> — Returns the last errstr</li><li><a href="function.fann-get-layer-array.php">fann_get_layer_array</a> — Get the number of neurons in each layer in the network</li><li><a href="function.fann-get-learning-momentum.php">fann_get_learning_momentum</a> — Returns the learning momentum</li><li><a href="function.fann-get-learning-rate.php">fann_get_learning_rate</a> — Returns the learning rate</li><li><a href="function.fann-get-mse.php">fann_get_MSE</a> — Reads the mean square error from the network</li><li><a href="function.fann-get-network-type.php">fann_get_network_type</a> — Get the type of neural network it was created as</li><li><a href="function.fann-get-num-input.php">fann_get_num_input</a> — Get the number of input neurons</li><li><a href="function.fann-get-num-layers.php">fann_get_num_layers</a> — Get the number of layers in the neural network</li><li><a href="function.fann-get-num-output.php">fann_get_num_output</a> — Get the number of output neurons</li><li><a href="function.fann-get-quickprop-decay.php">fann_get_quickprop_decay</a> — Returns the decay which is a factor that weights should decrease in each iteration during quickprop training</li><li><a href="function.fann-get-quickprop-mu.php">fann_get_quickprop_mu</a> — Returns the mu factor</li><li><a href="function.fann-get-rprop-decrease-factor.php">fann_get_rprop_decrease_factor</a> — Returns the increase factor used during RPROP training</li><li><a href="function.fann-get-rprop-delta-max.php">fann_get_rprop_delta_max</a> — Returns the maximum step-size</li><li><a href="function.fann-get-rprop-delta-min.php">fann_get_rprop_delta_min</a> — Returns the minimum step-size</li><li><a href="function.fann-get-rprop-delta-zero.php">fann_get_rprop_delta_zero</a> — Returns the initial step-size</li><li><a href="function.fann-get-rprop-increase-factor.php">fann_get_rprop_increase_factor</a> — Returns the increase factor used during RPROP training</li><li><a href="function.fann-get-sarprop-step-error-shift.php">fann_get_sarprop_step_error_shift</a> — Returns the sarprop step error shift</li><li><a href="function.fann-get-sarprop-step-error-threshold-factor.php">fann_get_sarprop_step_error_threshold_factor</a> — Returns the sarprop step error threshold factor</li><li><a href="function.fann-get-sarprop-temperature.php">fann_get_sarprop_temperature</a> — Returns the sarprop temperature</li><li><a href="function.fann-get-sarprop-weight-decay-shift.php">fann_get_sarprop_weight_decay_shift</a> — Returns the sarprop weight decay shift</li><li><a href="function.fann-get-total-connections.php">fann_get_total_connections</a> — Get the total number of connections in the entire network</li><li><a href="function.fann-get-total-neurons.php">fann_get_total_neurons</a> — Get the total number of neurons in the entire network</li><li><a href="function.fann-get-train-error-function.php">fann_get_train_error_function</a> — Returns the error function used during training</li><li><a href="function.fann-get-train-stop-function.php">fann_get_train_stop_function</a> — Returns the stop function used during training</li><li><a href="function.fann-get-training-algorithm.php">fann_get_training_algorithm</a> — Returns the training algorithm</li><li><a href="function.fann-init-weights.php">fann_init_weights</a> — Initialize the weights using Widrow + Nguyen&rsquo;s algorithm</li><li><a href="function.fann-length-train-data.php">fann_length_train_data</a> — Returns the number of training patterns in the train data</li><li><a href="function.fann-merge-train-data.php">fann_merge_train_data</a> — Merges the train data</li><li><a href="function.fann-num-input-train-data.php">fann_num_input_train_data</a> — Returns the number of inputs in each of the training patterns in the train data</li><li><a href="function.fann-num-output-train-data.php">fann_num_output_train_data</a> — Returns the number of outputs in each of the training patterns in the train data</li><li><a href="function.fann-print-error.php">fann_print_error</a> — Prints the error string</li><li><a href="function.fann-randomize-weights.php">fann_randomize_weights</a> — Give each connection a random weight between min_weight and max_weight</li><li><a href="function.fann-read-train-from-file.php">fann_read_train_from_file</a> — Reads a file that stores training data</li><li><a href="function.fann-reset-errno.php">fann_reset_errno</a> — Resets the last error number</li><li><a href="function.fann-reset-errstr.php">fann_reset_errstr</a> — Resets the last error string</li><li><a href="function.fann-reset-mse.php">fann_reset_MSE</a> — Resets the mean square error from the network</li><li><a href="function.fann-run.php">fann_run</a> — Will run input through the neural network</li><li><a href="function.fann-save.php">fann_save</a> — Saves the entire network to a configuration file</li><li><a href="function.fann-save-train.php">fann_save_train</a> — Save the training structure to a file</li><li><a href="function.fann-scale-input.php">fann_scale_input</a> — Scale data in input vector before feed it to ann based on previously calculated parameters</li><li><a href="function.fann-scale-input-train-data.php">fann_scale_input_train_data</a> — Scales the inputs in the training data to the specified range</li><li><a href="function.fann-scale-output.php">fann_scale_output</a> — Scale data in output vector before feed it to ann based on previously calculated parameters</li><li><a href="function.fann-scale-output-train-data.php">fann_scale_output_train_data</a> — Scales the outputs in the training data to the specified range</li><li><a href="function.fann-scale-train.php">fann_scale_train</a> — Scale input and output data based on previously calculated parameters</li><li><a href="function.fann-scale-train-data.php">fann_scale_train_data</a> — Scales the inputs and outputs in the training data to the specified range</li><li><a href="function.fann-set-activation-function.php">fann_set_activation_function</a> — Sets the activation function for supplied neuron and layer</li><li><a href="function.fann-set-activation-function-hidden.php">fann_set_activation_function_hidden</a> — Sets the activation function for all of the hidden layers</li><li><a href="function.fann-set-activation-function-layer.php">fann_set_activation_function_layer</a> — Sets the activation function for all the neurons in the supplied layer</li><li><a href="function.fann-set-activation-function-output.php">fann_set_activation_function_output</a> — Sets the activation function for the output layer</li><li><a href="function.fann-set-activation-steepness.php">fann_set_activation_steepness</a> — Sets the activation steepness for supplied neuron and layer number</li><li><a href="function.fann-set-activation-steepness-hidden.php">fann_set_activation_steepness_hidden</a> — Sets the steepness of the activation steepness for all neurons in the all hidden layers</li><li><a href="function.fann-set-activation-steepness-layer.php">fann_set_activation_steepness_layer</a> — Sets the activation steepness for all of the neurons in the supplied layer number</li><li><a href="function.fann-set-activation-steepness-output.php">fann_set_activation_steepness_output</a> — Sets the steepness of the activation steepness in the output layer</li><li><a href="function.fann-set-bit-fail-limit.php">fann_set_bit_fail_limit</a> — Set the bit fail limit used during training</li><li><a href="function.fann-set-callback.php">fann_set_callback</a> — Sets the callback function for use during training</li><li><a href="function.fann-set-cascade-activation-functions.php">fann_set_cascade_activation_functions</a> — Sets the array of cascade candidate activation functions</li><li><a href="function.fann-set-cascade-activation-steepnesses.php">fann_set_cascade_activation_steepnesses</a> — Sets the array of cascade candidate activation steepnesses</li><li><a href="function.fann-set-cascade-candidate-change-fraction.php">fann_set_cascade_candidate_change_fraction</a> — Sets the cascade candidate change fraction</li><li><a href="function.fann-set-cascade-candidate-limit.php">fann_set_cascade_candidate_limit</a> — Sets the candidate limit</li><li><a href="function.fann-set-cascade-candidate-stagnation-epochs.php">fann_set_cascade_candidate_stagnation_epochs</a> — Sets the number of cascade candidate stagnation epochs</li><li><a href="function.fann-set-cascade-max-cand-epochs.php">fann_set_cascade_max_cand_epochs</a> — Sets the max candidate epochs</li><li><a href="function.fann-set-cascade-max-out-epochs.php">fann_set_cascade_max_out_epochs</a> — Sets the maximum out epochs</li><li><a href="function.fann-set-cascade-min-cand-epochs.php">fann_set_cascade_min_cand_epochs</a> — Sets the min candidate epochs</li><li><a href="function.fann-set-cascade-min-out-epochs.php">fann_set_cascade_min_out_epochs</a> — Sets the minimum out epochs</li><li><a href="function.fann-set-cascade-num-candidate-groups.php">fann_set_cascade_num_candidate_groups</a> — Sets the number of candidate groups</li><li><a href="function.fann-set-cascade-output-change-fraction.php">fann_set_cascade_output_change_fraction</a> — Sets the cascade output change fraction</li><li><a href="function.fann-set-cascade-output-stagnation-epochs.php">fann_set_cascade_output_stagnation_epochs</a> — Sets the number of cascade output stagnation epochs</li><li><a href="function.fann-set-cascade-weight-multiplier.php">fann_set_cascade_weight_multiplier</a> — Sets the weight multiplier</li><li><a href="function.fann-set-error-log.php">fann_set_error_log</a> — Sets where the errors are logged to</li><li><a href="function.fann-set-input-scaling-params.php">fann_set_input_scaling_params</a> — Calculate input scaling parameters for future use based on training data</li><li><a href="function.fann-set-learning-momentum.php">fann_set_learning_momentum</a> — Sets the learning momentum</li><li><a href="function.fann-set-learning-rate.php">fann_set_learning_rate</a> — Sets the learning rate</li><li><a href="function.fann-set-output-scaling-params.php">fann_set_output_scaling_params</a> — Calculate output scaling parameters for future use based on training data</li><li><a href="function.fann-set-quickprop-decay.php">fann_set_quickprop_decay</a> — Sets the quickprop decay factor</li><li><a href="function.fann-set-quickprop-mu.php">fann_set_quickprop_mu</a> — Sets the quickprop mu factor</li><li><a href="function.fann-set-rprop-decrease-factor.php">fann_set_rprop_decrease_factor</a> — Sets the decrease factor used during RPROP training</li><li><a href="function.fann-set-rprop-delta-max.php">fann_set_rprop_delta_max</a> — Sets the maximum step-size</li><li><a href="function.fann-set-rprop-delta-min.php">fann_set_rprop_delta_min</a> — Sets the minimum step-size</li><li><a href="function.fann-set-rprop-delta-zero.php">fann_set_rprop_delta_zero</a> — Sets the initial step-size</li><li><a href="function.fann-set-rprop-increase-factor.php">fann_set_rprop_increase_factor</a> — Sets the increase factor used during RPROP training</li><li><a href="function.fann-set-sarprop-step-error-shift.php">fann_set_sarprop_step_error_shift</a> — Sets the sarprop step error shift</li><li><a href="function.fann-set-sarprop-step-error-threshold-factor.php">fann_set_sarprop_step_error_threshold_factor</a> — Sets the sarprop step error threshold factor</li><li><a href="function.fann-set-sarprop-temperature.php">fann_set_sarprop_temperature</a> — Sets the sarprop temperature</li><li><a href="function.fann-set-sarprop-weight-decay-shift.php">fann_set_sarprop_weight_decay_shift</a> — Sets the sarprop weight decay shift</li><li><a href="function.fann-set-scaling-params.php">fann_set_scaling_params</a> — Calculate input and output scaling parameters for future use based on training data</li><li><a href="function.fann-set-train-error-function.php">fann_set_train_error_function</a> — Sets the error function used during training</li><li><a href="function.fann-set-train-stop-function.php">fann_set_train_stop_function</a> — Sets the stop function used during training</li><li><a href="function.fann-set-training-algorithm.php">fann_set_training_algorithm</a> — Sets the training algorithm</li><li><a href="function.fann-set-weight.php">fann_set_weight</a> — Set a connection in the network</li><li><a href="function.fann-set-weight-array.php">fann_set_weight_array</a> — Set connections in the network</li><li><a href="function.fann-shuffle-train-data.php">fann_shuffle_train_data</a> — Shuffles training data, randomizing the order</li><li><a href="function.fann-subset-train-data.php">fann_subset_train_data</a> — Returns an copy of a subset of the train data</li><li><a href="function.fann-test.php">fann_test</a> — Test with a set of inputs, and a set of desired outputs</li><li><a href="function.fann-test-data.php">fann_test_data</a> — Test a set of training data and calculates the MSE for the training data</li><li><a href="function.fann-train.php">fann_train</a> — Train one iteration with a set of inputs, and a set of desired outputs</li><li><a href="function.fann-train-epoch.php">fann_train_epoch</a> — Train one epoch with a set of training data</li><li><a href="function.fann-train-on-data.php">fann_train_on_data</a> — Trains on an entire dataset for a period of time</li><li><a href="function.fann-train-on-file.php">fann_train_on_file</a> — Trains on an entire dataset, which is read from file, for a period of time</li></ul></li><li><a href="class.fannconnection.php">FANNConnection</a> — The FANNConnection class<ul class="chunklist chunklist_book chunklist_children"><li><a href="fannconnection.construct.php">FANNConnection::__construct</a> — The connection constructor</li><li><a href="fannconnection.getfromneuron.php">FANNConnection::getFromNeuron</a> — Returns the postions of starting neuron</li><li><a href="fannconnection.gettoneuron.php">FANNConnection::getToNeuron</a> — Returns the postions of terminating neuron</li><li><a href="fannconnection.getweight.php">FANNConnection::getWeight</a> — Returns the connection weight</li><li><a href="fannconnection.setweight.php">FANNConnection::setWeight</a> — Sets the connections weight</li></ul></li></ul></div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/fann/book.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fbook.fann%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=book.fann&amp;repo=en&amp;redirect=https://www.php.net/manual/en/book.fann.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="refs.basic.other.php">Other Basic Extensions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="book.geoip.php" title="GeoIP">GeoIP</a>
                        </li>
                                                <li class="current">
                            <a href="book.fann.php" title="FANN">FANN</a>
                        </li>
                                                <li class="">
                            <a href="book.igbinary.php" title="Igbinary">Igbinary</a>
                        </li>
                                                <li class="">
                            <a href="book.json.php" title="JSON">JSON</a>
                        </li>
                                                <li class="">
                            <a href="book.simdjson.php" title="Simdjson">Simdjson</a>
                        </li>
                                                <li class="">
                            <a href="book.lua.php" title="Lua">Lua</a>
                        </li>
                                                <li class="">
                            <a href="book.luasandbox.php" title="LuaSandbox">LuaSandbox</a>
                        </li>
                                                <li class="">
                            <a href="book.misc.php" title="Misc.">Misc.</a>
                        </li>
                                                <li class="">
                            <a href="book.random.php" title="Random">Random</a>
                        </li>
                                                <li class="">
                            <a href="book.seaslog.php" title="Seaslog">Seaslog</a>
                        </li>
                                                <li class="">
                            <a href="book.spl.php" title="SPL">SPL</a>
                        </li>
                                                <li class="">
                            <a href="book.stream.php" title="Streams">Streams</a>
                        </li>
                                                <li class="">
                            <a href="book.swoole.php" title="Swoole">Swoole</a>
                        </li>
                                                <li class="">
                            <a href="book.tidy.php" title="Tidy">Tidy</a>
                        </li>
                                                <li class="">
                            <a href="book.tokenizer.php" title="Tokenizer">Tokenizer</a>
                        </li>
                                                <li class="">
                            <a href="book.url.php" title="URLs">URLs</a>
                        </li>
                                                <li class="">
                            <a href="book.v8js.php" title="V8js">V8js</a>
                        </li>
                                                <li class="">
                            <a href="book.yaml.php" title="Yaml">Yaml</a>
                        </li>
                                                <li class="">
                            <a href="book.yaf.php" title="Yaf">Yaf</a>
                        </li>
                                                <li class="">
                            <a href="book.yaconf.php" title="Yaconf">Yaconf</a>
                        </li>
                                                <li class="">
                            <a href="book.taint.php" title="Taint">Taint</a>
                        </li>
                                                <li class="">
                            <a href="book.ds.php" title="Data Structures">Data Structures</a>
                        </li>
                                                <li class="">
                            <a href="book.var_representation.php" title="var_&#8203;representation">var_&#8203;representation</a>
                        </li>
                        
                    </ul>
                
            </li>
                        
                    </ul>
    </aside>


  </div><!-- layout -->

  <footer>
    <div class="container footer-content">
      <div class="row-fluid">
      <ul class="footmenu">
        <li><a href="/manual/en/copyright.php">Copyright &copy; 2001-2025 The PHP Documentation Group</a></li>
        <li><a href="/my.php">My PHP.net</a></li>
        <li><a href="/contact.php">Contact</a></li>
        <li><a href="/sites.php">Other PHP.net sites</a></li>
        <li><a href="/privacy.php">Privacy policy</a></li>
      </ul>
      </div>
    </div>
  </footer>

    
<script src="/manual/en/js/ext/jquery-3.6.0.min.js"></script>
<script src="/manual/en/js/ext/FuzzySearch.min.js"></script>
<script src="/manual/en/js/ext/mousetrap.min.js"></script>
<script src="/manual/en/js/ext/jquery.scrollTo.min.js"></script>
<script src="/manual/en/js/search.js"></script>
<script src="/manual/en/js/common.js"></script>
<script type="module" src="/manual/en/js/interactive-examples.js"></script>

<a id="toTop" href="javascript:;"><span id="toTopHover"></span><img width="40" height="40" alt="To Top" src="/images/to-top@2x.png"></a>

<div id="search-modal__backdrop" class="search-modal__backdrop">
  <div
    role="dialog"
    aria-label="Search modal"
    id="search-modal"
    class="search-modal"
  >
    <div class="search-modal__header">
      <div class="search-modal__form">
        <div class="search-modal__input-icon">
          <!-- https://feathericons.com search -->
          <svg xmlns="http://www.w3.org/2000/svg"
            aria-hidden="true"
            width="24"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round"
          >
            <circle cx="11" cy="11" r="8"></circle>
            <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
          </svg>
        </div>
        <input
          type="search"
          id="search-modal__input"
          class="search-modal__input"
          placeholder="Search docs"
          aria-label="Search docs"
        />
      </div>

      <button aria-label="Close" class="search-modal__close">
        <!-- https://pictogrammers.com/library/mdi/icon/close/ -->
        <svg
          xmlns="http://www.w3.org/2000/svg"
          aria-hidden="true"
          width="24"
          viewBox="0 0 24 24"
        >
          <path d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z"/>
        </svg>
      </button>
    </div>
    <div
      role="listbox"
      aria-label="Search results"
      id="search-modal__results"
      class="search-modal__results"
    ></div>
    <div class="search-modal__helper-text">
      <div>
        <kbd>↑</kbd> and <kbd>↓</kbd> to navigate •
        <kbd>Enter</kbd> to select •
        <kbd>Esc</kbd> to close
      </div>
      <div>
        Press <kbd>Enter</kbd> without
        selection to search using Google
      </div>
    </div>
  </div>
</div>

</body>
</html>
