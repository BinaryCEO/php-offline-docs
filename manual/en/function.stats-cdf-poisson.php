<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: stats_cdf_poisson - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.stats-cdf-poisson.php">
 <link rel="shorturl" href="https://www.php.net/stats-cdf-poisson">
 <link rel="alternate" href="https://www.php.net/stats-cdf-poisson" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.stats.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.stats-cdf-normal.php">
 <link rel="next" href="https://www.php.net/manual/en/function.stats-cdf-t.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.stats-cdf-poisson.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.stats-cdf-poisson.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.stats-cdf-poisson.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.stats-cdf-poisson.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.stats-cdf-poisson.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.stats-cdf-poisson.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.stats-cdf-poisson.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.stats-cdf-poisson.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.stats-cdf-poisson.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.stats-cdf-poisson.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.stats-cdf-poisson.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Calculates any one parameter of the Poisson distribution given values for the others" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: stats_cdf_poisson - Manual" />
<meta name="twitter:description" content="Calculates any one parameter of the Poisson distribution given values for the others" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: stats_cdf_poisson - Manual" />
<meta itemprop="description" content="Calculates any one parameter of the Poisson distribution given values for the others" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Calculates any one parameter of the Poisson distribution given values for the others" />

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
        <a href="function.stats-cdf-t.php">
          stats_cdf_t &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.stats-cdf-normal.php">
          &laquo; stats_cdf_normal        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.math.php'>Mathematical Extensions</a></li>      <li><a href='book.stats.php'>Statistics</a></li>      <li><a href='ref.stats.php'>Statistic Functions</a></li>      </ul>
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
            <option value='en/function.stats-cdf-poisson.php' selected="selected">English</option>
            <option value='de/function.stats-cdf-poisson.php'>German</option>
            <option value='es/function.stats-cdf-poisson.php'>Spanish</option>
            <option value='fr/function.stats-cdf-poisson.php'>French</option>
            <option value='it/function.stats-cdf-poisson.php'>Italian</option>
            <option value='ja/function.stats-cdf-poisson.php'>Japanese</option>
            <option value='pt_BR/function.stats-cdf-poisson.php'>Brazilian Portuguese</option>
            <option value='ru/function.stats-cdf-poisson.php'>Russian</option>
            <option value='tr/function.stats-cdf-poisson.php'>Turkish</option>
            <option value='uk/function.stats-cdf-poisson.php'>Ukrainian</option>
            <option value='zh/function.stats-cdf-poisson.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.stats-cdf-poisson" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">stats_cdf_poisson</h1>
  <p class="verinfo">(PECL stats &gt;= 1.0.0)</p><p class="refpurpose"><span class="refname">stats_cdf_poisson</span> &mdash; <span class="dc-title">Calculates any one parameter of the Poisson distribution given values for the others</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.stats-cdf-poisson-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>stats_cdf_poisson</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$par1</code></span>, <span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$par2</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$which</code></span>): <span class="type"><a href="language.types.float.php" class="type float">float</a></span></div>

  <p class="para rdfs-comment">
   Returns the cumulative distribution function, its inverse, or one of its parameters, of the Poisson distribution.
   The kind of the return value and parameters (<code class="parameter">par1</code> and <code class="parameter">par2</code>) are
   determined by <code class="parameter">which</code>.
  </p>
  <p class="para">
   The following table lists the return value and parameters by <code class="parameter">which</code>.
   CDF, x, and lambda denotes cumulative distribution function, the value of the random variable,
   and the parameter of the Poisson distribution, respectively.
   <table class="doctable table">
    <caption><strong>Return value and parameters</strong></caption>
    
     <thead>
      <tr>
       <th><code class="parameter">which</code></th>
       <th>Return value</th>
       <th><code class="parameter">par1</code></th>
       <th><code class="parameter">par2</code></th>
      </tr>

     </thead>

     <tbody class="tbody">
      <tr>
       <td>1</td>
       <td>CDF</td>
       <td>x</td>
       <td>lambda</td>
      </tr>

      <tr>
       <td>2</td>
       <td>x</td>
       <td>CDF</td>
       <td>lambda</td>
      </tr>

      <tr>
       <td>3</td>
       <td>lambda</td>
       <td>x</td>
       <td>CDF</td>
      </tr>

     </tbody>
    
   </table>

  </p>
 </div>

 <div class="refsect1 parameters" id="refsect1-function.stats-cdf-poisson-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">par1</code></dt>
     <dd>
      <p class="para">
       The first parameter
      </p>
     </dd>
    
    
     <dt><code class="parameter">par2</code></dt>
     <dd>
      <p class="para">
       The second parameter
      </p>
     </dd>
    
    
     <dt><code class="parameter">which</code></dt>
     <dd>
      <p class="para">
       The flag to determine what to be calculated
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.stats-cdf-poisson-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns CDF, x, or lambda, determined by <code class="parameter">which</code>.
  </p>
 </div>


 


 


 


 


</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/stats/functions/stats-cdf-poisson.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.stats-cdf-poisson%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.stats-cdf-poisson&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.stats-cdf-poisson.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">1 note</span></h3>
 </div><div id="allnotes">
  <div class="note" id="110694">  <div class="votes">
    <div id="Vu110694">
    <a href="/manual/vote-note.php?id=110694&amp;page=function.stats-cdf-poisson&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd110694">
    <a href="/manual/vote-note.php?id=110694&amp;page=function.stats-cdf-poisson&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V110694" title="57% like this...">
    1
    </div>
  </div>
  <a href="#110694" class="name">
  <strong class="user"><em>s at nder dot com</em></strong></a><a class="genanchor" href="#110694"> &para;</a><div class="date" title="2012-11-23 09:33"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom110694">
<div class="phpcode"><code><span class="html">A simple poisson-distribution function, which only works for relatively small numbers (maximum of ~100/100 for most systems):<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">factorial</span><span class="keyword">(</span><span class="default">$number</span><span class="keyword">)<br />{<br />        if (</span><span class="default">$number </span><span class="keyword">&lt; </span><span class="default">2</span><span class="keyword">) {<br />                return </span><span class="default">1</span><span class="keyword">;<br />        } else {<br />                return (</span><span class="default">$number </span><span class="keyword">* </span><span class="default">factorial</span><span class="keyword">(</span><span class="default">$number</span><span class="keyword">-</span><span class="default">1</span><span class="keyword">));<br />        }<br />}<br /><br />function </span><span class="default">poisson</span><span class="keyword">(</span><span class="default">$chance</span><span class="keyword">, </span><span class="default">$occurrence</span><span class="keyword">)<br />{<br />        </span><span class="default">$e </span><span class="keyword">= </span><span class="default">exp</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">);<br /><br />        </span><span class="default">$a </span><span class="keyword">= </span><span class="default">pow</span><span class="keyword">(</span><span class="default">$e</span><span class="keyword">, (-</span><span class="default">1 </span><span class="keyword">* </span><span class="default">$chance</span><span class="keyword">));<br />        </span><span class="default">$b </span><span class="keyword">= </span><span class="default">pow</span><span class="keyword">(</span><span class="default">$chance</span><span class="keyword">,</span><span class="default">$occurrence</span><span class="keyword">);<br />        </span><span class="default">$c </span><span class="keyword">= </span><span class="default">factorial</span><span class="keyword">(</span><span class="default">$occurrence</span><span class="keyword">);<br /><br />        return </span><span class="default">$a </span><span class="keyword">* </span><span class="default">$b </span><span class="keyword">/ </span><span class="default">$c</span><span class="keyword">;<br />}<br /><br /></span><span class="default">$test </span><span class="keyword">= </span><span class="default">poisson</span><span class="keyword">(</span><span class="default">100</span><span class="keyword">,</span><span class="default">100</span><span class="keyword">);<br />echo </span><span class="default">$test </span><span class="keyword">. </span><span class="string">"\n"</span><span class="keyword">;<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.stats-cdf-poisson&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.stats-cdf-poisson.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.stats.php">Statistic Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.stats-absolute-deviation.php" title="stats_&#8203;absolute_&#8203;deviation">stats_&#8203;absolute_&#8203;deviation</a>
                        </li>
                                                <li class="">
                            <a href="function.stats-cdf-beta.php" title="stats_&#8203;cdf_&#8203;beta">stats_&#8203;cdf_&#8203;beta</a>
                        </li>
                                                <li class="">
                            <a href="function.stats-cdf-binomial.php" title="stats_&#8203;cdf_&#8203;binomial">stats_&#8203;cdf_&#8203;binomial</a>
                        </li>
                                                <li class="">
                            <a href="function.stats-cdf-cauchy.php" title="stats_&#8203;cdf_&#8203;cauchy">stats_&#8203;cdf_&#8203;cauchy</a>
                        </li>
                                                <li class="">
                            <a href="function.stats-cdf-chisquare.php" title="stats_&#8203;cdf_&#8203;chisquare">stats_&#8203;cdf_&#8203;chisquare</a>
                        </li>
                                                <li class="">
                            <a href="function.stats-cdf-exponential.php" title="stats_&#8203;cdf_&#8203;exponential">stats_&#8203;cdf_&#8203;exponential</a>
                        </li>
                                                <li class="">
                            <a href="function.stats-cdf-f.php" title="stats_&#8203;cdf_&#8203;f">stats_&#8203;cdf_&#8203;f</a>
                        </li>
                                                <li class="">
                            <a href="function.stats-cdf-gamma.php" title="stats_&#8203;cdf_&#8203;gamma">stats_&#8203;cdf_&#8203;gamma</a>
                        </li>
                                                <li class="">
                            <a href="function.stats-cdf-laplace.php" title="stats_&#8203;cdf_&#8203;laplace">stats_&#8203;cdf_&#8203;laplace</a>
                        </li>
                                                <li class="">
                            <a href="function.stats-cdf-logistic.php" title="stats_&#8203;cdf_&#8203;logistic">stats_&#8203;cdf_&#8203;logistic</a>
                        </li>
                                                <li class="">
                            <a href="function.stats-cdf-negative-binomial.php" title="stats_&#8203;cdf_&#8203;negative_&#8203;binomial">stats_&#8203;cdf_&#8203;negative_&#8203;binomial</a>
                        </li>
                                                <li class="">
                            <a href="function.stats-cdf-noncentral-chisquare.php" title="stats_&#8203;cdf_&#8203;noncentral_&#8203;chisquare">stats_&#8203;cdf_&#8203;noncentral_&#8203;chisquare</a>
                        </li>
                                                <li class="">
                            <a href="function.stats-cdf-noncentral-f.php" title="stats_&#8203;cdf_&#8203;noncentral_&#8203;f">stats_&#8203;cdf_&#8203;noncentral_&#8203;f</a>
                        </li>
                                                <li class="">
                            <a href="function.stats-cdf-noncentral-t.php" title="stats_&#8203;cdf_&#8203;noncentral_&#8203;t">stats_&#8203;cdf_&#8203;noncentral_&#8203;t</a>
                        </li>
                                                <li class="">
                            <a href="function.stats-cdf-normal.php" title="stats_&#8203;cdf_&#8203;normal">stats_&#8203;cdf_&#8203;normal</a>
                        </li>
                                                <li class="current">
                            <a href="function.stats-cdf-poisson.php" title="stats_&#8203;cdf_&#8203;poisson">stats_&#8203;cdf_&#8203;poisson</a>
                        </li>
                                                <li class="">
                            <a href="function.stats-cdf-t.php" title="stats_&#8203;cdf_&#8203;t">stats_&#8203;cdf_&#8203;t</a>
                        </li>
                                                <li class="">
                            <a href="function.stats-cdf-uniform.php" title="stats_&#8203;cdf_&#8203;uniform">stats_&#8203;cdf_&#8203;uniform</a>
                        </li>
                                                <li class="">
                            <a href="function.stats-cdf-weibull.php" title="stats_&#8203;cdf_&#8203;weibull">stats_&#8203;cdf_&#8203;weibull</a>
                        </li>
                                                <li class="">
                            <a href="function.stats-covariance.php" title="stats_&#8203;covariance">stats_&#8203;covariance</a>
                        </li>
                                                <li class="">
                            <a href="function.stats-dens-beta.php" title="stats_&#8203;dens_&#8203;beta">stats_&#8203;dens_&#8203;beta</a>
                        </li>
                                                <li class="">
                            <a href="function.stats-dens-cauchy.php" title="stats_&#8203;dens_&#8203;cauchy">stats_&#8203;dens_&#8203;cauchy</a>
                        </li>
                                                <li class="">
                            <a href="function.stats-dens-chisquare.php" title="stats_&#8203;dens_&#8203;chisquare">stats_&#8203;dens_&#8203;chisquare</a>
                        </li>
                                                <li class="">
                            <a href="function.stats-dens-exponential.php" title="stats_&#8203;dens_&#8203;exponential">stats_&#8203;dens_&#8203;exponential</a>
                        </li>
                                                <li class="">
                            <a href="function.stats-dens-f.php" title="stats_&#8203;dens_&#8203;f">stats_&#8203;dens_&#8203;f</a>
                        </li>
                                                <li class="">
                            <a href="function.stats-dens-gamma.php" title="stats_&#8203;dens_&#8203;gamma">stats_&#8203;dens_&#8203;gamma</a>
                        </li>
                                                <li class="">
                            <a href="function.stats-dens-laplace.php" title="stats_&#8203;dens_&#8203;laplace">stats_&#8203;dens_&#8203;laplace</a>
                        </li>
                                                <li class="">
                            <a href="function.stats-dens-logistic.php" title="stats_&#8203;dens_&#8203;logistic">stats_&#8203;dens_&#8203;logistic</a>
                        </li>
                                                <li class="">
                            <a href="function.stats-dens-normal.php" title="stats_&#8203;dens_&#8203;normal">stats_&#8203;dens_&#8203;normal</a>
                        </li>
                                                <li class="">
                            <a href="function.stats-dens-pmf-binomial.php" title="stats_&#8203;dens_&#8203;pmf_&#8203;binomial">stats_&#8203;dens_&#8203;pmf_&#8203;binomial</a>
                        </li>
                                                <li class="">
                            <a href="function.stats-dens-pmf-hypergeometric.php" title="stats_&#8203;dens_&#8203;pmf_&#8203;hypergeometric">stats_&#8203;dens_&#8203;pmf_&#8203;hypergeometric</a>
                        </li>
                                                <li class="">
                            <a href="function.stats-dens-pmf-negative-binomial.php" title="stats_&#8203;dens_&#8203;pmf_&#8203;negative_&#8203;binomial">stats_&#8203;dens_&#8203;pmf_&#8203;negative_&#8203;binomial</a>
                        </li>
                                                <li class="">
                            <a href="function.stats-dens-pmf-poisson.php" title="stats_&#8203;dens_&#8203;pmf_&#8203;poisson">stats_&#8203;dens_&#8203;pmf_&#8203;poisson</a>
                        </li>
                                                <li class="">
                            <a href="function.stats-dens-t.php" title="stats_&#8203;dens_&#8203;t">stats_&#8203;dens_&#8203;t</a>
                        </li>
                                                <li class="">
                            <a href="function.stats-dens-uniform.php" title="stats_&#8203;dens_&#8203;uniform">stats_&#8203;dens_&#8203;uniform</a>
                        </li>
                                                <li class="">
                            <a href="function.stats-dens-weibull.php" title="stats_&#8203;dens_&#8203;weibull">stats_&#8203;dens_&#8203;weibull</a>
                        </li>
                                                <li class="">
                            <a href="function.stats-harmonic-mean.php" title="stats_&#8203;harmonic_&#8203;mean">stats_&#8203;harmonic_&#8203;mean</a>
                        </li>
                                                <li class="">
                            <a href="function.stats-kurtosis.php" title="stats_&#8203;kurtosis">stats_&#8203;kurtosis</a>
                        </li>
                                                <li class="">
                            <a href="function.stats-rand-gen-beta.php" title="stats_&#8203;rand_&#8203;gen_&#8203;beta">stats_&#8203;rand_&#8203;gen_&#8203;beta</a>
                        </li>
                                                <li class="">
                            <a href="function.stats-rand-gen-chisquare.php" title="stats_&#8203;rand_&#8203;gen_&#8203;chisquare">stats_&#8203;rand_&#8203;gen_&#8203;chisquare</a>
                        </li>
                                                <li class="">
                            <a href="function.stats-rand-gen-exponential.php" title="stats_&#8203;rand_&#8203;gen_&#8203;exponential">stats_&#8203;rand_&#8203;gen_&#8203;exponential</a>
                        </li>
                                                <li class="">
                            <a href="function.stats-rand-gen-f.php" title="stats_&#8203;rand_&#8203;gen_&#8203;f">stats_&#8203;rand_&#8203;gen_&#8203;f</a>
                        </li>
                                                <li class="">
                            <a href="function.stats-rand-gen-funiform.php" title="stats_&#8203;rand_&#8203;gen_&#8203;funiform">stats_&#8203;rand_&#8203;gen_&#8203;funiform</a>
                        </li>
                                                <li class="">
                            <a href="function.stats-rand-gen-gamma.php" title="stats_&#8203;rand_&#8203;gen_&#8203;gamma">stats_&#8203;rand_&#8203;gen_&#8203;gamma</a>
                        </li>
                                                <li class="">
                            <a href="function.stats-rand-gen-ibinomial.php" title="stats_&#8203;rand_&#8203;gen_&#8203;ibinomial">stats_&#8203;rand_&#8203;gen_&#8203;ibinomial</a>
                        </li>
                                                <li class="">
                            <a href="function.stats-rand-gen-ibinomial-negative.php" title="stats_&#8203;rand_&#8203;gen_&#8203;ibinomial_&#8203;negative">stats_&#8203;rand_&#8203;gen_&#8203;ibinomial_&#8203;negative</a>
                        </li>
                                                <li class="">
                            <a href="function.stats-rand-gen-int.php" title="stats_&#8203;rand_&#8203;gen_&#8203;int">stats_&#8203;rand_&#8203;gen_&#8203;int</a>
                        </li>
                                                <li class="">
                            <a href="function.stats-rand-gen-ipoisson.php" title="stats_&#8203;rand_&#8203;gen_&#8203;ipoisson">stats_&#8203;rand_&#8203;gen_&#8203;ipoisson</a>
                        </li>
                                                <li class="">
                            <a href="function.stats-rand-gen-iuniform.php" title="stats_&#8203;rand_&#8203;gen_&#8203;iuniform">stats_&#8203;rand_&#8203;gen_&#8203;iuniform</a>
                        </li>
                                                <li class="">
                            <a href="function.stats-rand-gen-noncentral-chisquare.php" title="stats_&#8203;rand_&#8203;gen_&#8203;noncentral_&#8203;chisquare">stats_&#8203;rand_&#8203;gen_&#8203;noncentral_&#8203;chisquare</a>
                        </li>
                                                <li class="">
                            <a href="function.stats-rand-gen-noncentral-f.php" title="stats_&#8203;rand_&#8203;gen_&#8203;noncentral_&#8203;f">stats_&#8203;rand_&#8203;gen_&#8203;noncentral_&#8203;f</a>
                        </li>
                                                <li class="">
                            <a href="function.stats-rand-gen-noncentral-t.php" title="stats_&#8203;rand_&#8203;gen_&#8203;noncentral_&#8203;t">stats_&#8203;rand_&#8203;gen_&#8203;noncentral_&#8203;t</a>
                        </li>
                                                <li class="">
                            <a href="function.stats-rand-gen-normal.php" title="stats_&#8203;rand_&#8203;gen_&#8203;normal">stats_&#8203;rand_&#8203;gen_&#8203;normal</a>
                        </li>
                                                <li class="">
                            <a href="function.stats-rand-gen-t.php" title="stats_&#8203;rand_&#8203;gen_&#8203;t">stats_&#8203;rand_&#8203;gen_&#8203;t</a>
                        </li>
                                                <li class="">
                            <a href="function.stats-rand-get-seeds.php" title="stats_&#8203;rand_&#8203;get_&#8203;seeds">stats_&#8203;rand_&#8203;get_&#8203;seeds</a>
                        </li>
                                                <li class="">
                            <a href="function.stats-rand-phrase-to-seeds.php" title="stats_&#8203;rand_&#8203;phrase_&#8203;to_&#8203;seeds">stats_&#8203;rand_&#8203;phrase_&#8203;to_&#8203;seeds</a>
                        </li>
                                                <li class="">
                            <a href="function.stats-rand-ranf.php" title="stats_&#8203;rand_&#8203;ranf">stats_&#8203;rand_&#8203;ranf</a>
                        </li>
                                                <li class="">
                            <a href="function.stats-rand-setall.php" title="stats_&#8203;rand_&#8203;setall">stats_&#8203;rand_&#8203;setall</a>
                        </li>
                                                <li class="">
                            <a href="function.stats-skew.php" title="stats_&#8203;skew">stats_&#8203;skew</a>
                        </li>
                                                <li class="">
                            <a href="function.stats-standard-deviation.php" title="stats_&#8203;standard_&#8203;deviation">stats_&#8203;standard_&#8203;deviation</a>
                        </li>
                                                <li class="">
                            <a href="function.stats-stat-binomial-coef.php" title="stats_&#8203;stat_&#8203;binomial_&#8203;coef">stats_&#8203;stat_&#8203;binomial_&#8203;coef</a>
                        </li>
                                                <li class="">
                            <a href="function.stats-stat-correlation.php" title="stats_&#8203;stat_&#8203;correlation">stats_&#8203;stat_&#8203;correlation</a>
                        </li>
                                                <li class="">
                            <a href="function.stats-stat-factorial.php" title="stats_&#8203;stat_&#8203;factorial">stats_&#8203;stat_&#8203;factorial</a>
                        </li>
                                                <li class="">
                            <a href="function.stats-stat-independent-t.php" title="stats_&#8203;stat_&#8203;independent_&#8203;t">stats_&#8203;stat_&#8203;independent_&#8203;t</a>
                        </li>
                                                <li class="">
                            <a href="function.stats-stat-innerproduct.php" title="stats_&#8203;stat_&#8203;innerproduct">stats_&#8203;stat_&#8203;innerproduct</a>
                        </li>
                                                <li class="">
                            <a href="function.stats-stat-paired-t.php" title="stats_&#8203;stat_&#8203;paired_&#8203;t">stats_&#8203;stat_&#8203;paired_&#8203;t</a>
                        </li>
                                                <li class="">
                            <a href="function.stats-stat-percentile.php" title="stats_&#8203;stat_&#8203;percentile">stats_&#8203;stat_&#8203;percentile</a>
                        </li>
                                                <li class="">
                            <a href="function.stats-stat-powersum.php" title="stats_&#8203;stat_&#8203;powersum">stats_&#8203;stat_&#8203;powersum</a>
                        </li>
                                                <li class="">
                            <a href="function.stats-variance.php" title="stats_&#8203;variance">stats_&#8203;variance</a>
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
