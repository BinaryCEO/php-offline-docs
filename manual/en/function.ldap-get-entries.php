<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: ldap_get_entries - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.ldap-get-entries.php">
 <link rel="shorturl" href="https://www.php.net/ldap-get-entries">
 <link rel="alternate" href="https://www.php.net/ldap-get-entries" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.ldap.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.ldap-get-dn.php">
 <link rel="next" href="https://www.php.net/manual/en/function.ldap-get-option.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.ldap-get-entries.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.ldap-get-entries.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.ldap-get-entries.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.ldap-get-entries.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.ldap-get-entries.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.ldap-get-entries.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.ldap-get-entries.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.ldap-get-entries.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.ldap-get-entries.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.ldap-get-entries.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.ldap-get-entries.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Get all result entries" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: ldap_get_entries - Manual" />
<meta name="twitter:description" content="Get all result entries" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: ldap_get_entries - Manual" />
<meta itemprop="description" content="Get all result entries" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Get all result entries" />

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
        <a href="function.ldap-get-option.php">
          ldap_get_option &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.ldap-get-dn.php">
          &laquo; ldap_get_dn        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.remote.other.php'>Other Services</a></li>      <li><a href='book.ldap.php'>LDAP</a></li>      <li><a href='ref.ldap.php'>LDAP Functions</a></li>      </ul>
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
            <option value='en/function.ldap-get-entries.php' selected="selected">English</option>
            <option value='de/function.ldap-get-entries.php'>German</option>
            <option value='es/function.ldap-get-entries.php'>Spanish</option>
            <option value='fr/function.ldap-get-entries.php'>French</option>
            <option value='it/function.ldap-get-entries.php'>Italian</option>
            <option value='ja/function.ldap-get-entries.php'>Japanese</option>
            <option value='pt_BR/function.ldap-get-entries.php'>Brazilian Portuguese</option>
            <option value='ru/function.ldap-get-entries.php'>Russian</option>
            <option value='tr/function.ldap-get-entries.php'>Turkish</option>
            <option value='uk/function.ldap-get-entries.php'>Ukrainian</option>
            <option value='zh/function.ldap-get-entries.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.ldap-get-entries" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">ldap_get_entries</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">ldap_get_entries</span> &mdash; <span class="dc-title">Get all result entries</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.ldap-get-entries-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>ldap_get_entries</strong></span>(<span class="methodparam"><span class="type"><a href="class.ldap-connection.php" class="type LDAP\Connection">LDAP\Connection</a></span> <code class="parameter">$ldap</code></span>, <span class="methodparam"><span class="type"><a href="class.ldap-result.php" class="type LDAP\Result">LDAP\Result</a></span> <code class="parameter">$result</code></span>): <span class="type"><span class="type"><a href="language.types.array.php" class="type array">array</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">
   Reads multiple entries from the given result, and then reading the
   attributes and multiple values.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.ldap-get-entries-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">ldap</code></dt>
     <dd>
      <p class="para">
       An <span class="classname"><a href="class.ldap-connection.php" class="classname">LDAP\Connection</a></span> instance, returned by <span class="function"><a href="function.ldap-connect.php" class="function">ldap_connect()</a></span>.
      </p>
     </dd>
    
    
     <dt><code class="parameter">result</code></dt>
     <dd>
      <p class="para">
       An <span class="classname"><a href="class.ldap-result.php" class="classname">LDAP\Result</a></span> instance, returned by <span class="function"><a href="function.ldap-list.php" class="function">ldap_list()</a></span> or <span class="function"><a href="function.ldap-search.php" class="function">ldap_search()</a></span>.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.ldap-get-entries-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns a complete result information in a multi-dimensional array on
   success, or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
  <p class="para">
   The structure of the array is as follows.
   The attribute index is converted to lowercase. (Attributes are
   case-insensitive for directory servers, but not when used as
   array indices.)
   <div class="informalexample">
    <div class="example-contents">
<div class="cdata"><pre>
return_value[&quot;count&quot;] = number of entries in the result
return_value[0] : refers to the details of first entry

return_value[i][&quot;dn&quot;] =  DN of the ith entry in the result

return_value[i][&quot;count&quot;] = number of attributes in ith entry
return_value[i][j] = NAME of the jth attribute in the ith entry in the result

return_value[i][&quot;attribute&quot;][&quot;count&quot;] = number of values for
                                        attribute in ith entry
return_value[i][&quot;attribute&quot;][j] = jth value of attribute in ith entry
</pre></div>
    </div>

   </div>
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.ldap-get-entries-changelog">
  <h3 class="title">Changelog</h3>
  <table class="doctable informaltable">
   
    <thead>
     <tr>
      <th>Version</th>
      <th>Description</th>
     </tr>

    </thead>

    <tbody class="tbody">
     <tr>
 <td>8.1.0</td>
 <td>
  The <code class="parameter">ldap</code> parameter expects an <span class="classname"><a href="class.ldap-connection.php" class="classname">LDAP\Connection</a></span>
  instance now; previously, a valid <code class="literal">ldap link</code> <span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span> was expected.
 </td>
</tr>

     <tr>
 <td>8.1.0</td>
 <td>
  The <code class="parameter">result</code> parameter expects an <span class="classname"><a href="class.ldap-result.php" class="classname">LDAP\Result</a></span>
  instance now; previously, a valid <code class="literal">ldap result</code> <span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span> was expected.
 </td>
</tr>

    </tbody>
   
  </table>

 </div>


 <div class="refsect1 seealso" id="refsect1-function.ldap-get-entries-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.ldap-first-entry.php" class="function" rel="rdfs-seeAlso">ldap_first_entry()</a> - Return first result id</span></li>
    <li><span class="function"><a href="function.ldap-next-entry.php" class="function" rel="rdfs-seeAlso">ldap_next_entry()</a> - Get next result entry</span></li>
   </ul>
  </p>
 </div>


</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/ldap/functions/ldap-get-entries.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.ldap-get-entries%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.ldap-get-entries&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.ldap-get-entries.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">19 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="89508">  <div class="votes">
    <div id="Vu89508">
    <a href="/manual/vote-note.php?id=89508&amp;page=function.ldap-get-entries&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd89508">
    <a href="/manual/vote-note.php?id=89508&amp;page=function.ldap-get-entries&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V89508" title="80% like this...">
    15
    </div>
  </div>
  <a href="#89508" class="name">
  <strong class="user"><em>chl</em></strong></a><a class="genanchor" href="#89508"> &para;</a><div class="date" title="2009-03-11 08:20"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom89508">
<div class="phpcode"><code><span class="html">Recursive form of markus' function so it can take directly the result of ldap_get_entries :<br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">cleanUpEntry</span><span class="keyword">( </span><span class="default">$entry </span><span class="keyword">) {<br />  </span><span class="default">$retEntry </span><span class="keyword">= array();<br />  for ( </span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$entry</span><span class="keyword">[</span><span class="string">'count'</span><span class="keyword">]; </span><span class="default">$i</span><span class="keyword">++ ) {<br />    if (</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$entry</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">])) {<br />      </span><span class="default">$subtree </span><span class="keyword">= </span><span class="default">$entry</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">];<br />      </span><span class="comment">//This condition should be superfluous so just take the recursive call<br />      //adapted to your situation in order to increase perf.<br />      </span><span class="keyword">if ( ! empty(</span><span class="default">$subtree</span><span class="keyword">[</span><span class="string">'dn'</span><span class="keyword">]) and ! isset(</span><span class="default">$retEntry</span><span class="keyword">[</span><span class="default">$subtree</span><span class="keyword">[</span><span class="string">'dn'</span><span class="keyword">]])) {<br />        </span><span class="default">$retEntry</span><span class="keyword">[</span><span class="default">$subtree</span><span class="keyword">[</span><span class="string">'dn'</span><span class="keyword">]] = </span><span class="default">cleanUpEntry</span><span class="keyword">(</span><span class="default">$subtree</span><span class="keyword">);<br />      }<br />      else {<br />        </span><span class="default">$retEntry</span><span class="keyword">[] = </span><span class="default">cleanUpEntry</span><span class="keyword">(</span><span class="default">$subtree</span><span class="keyword">);<br />      }<br />    }<br />    else {<br />      </span><span class="default">$attribute </span><span class="keyword">= </span><span class="default">$entry</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">];<br />      if ( </span><span class="default">$entry</span><span class="keyword">[</span><span class="default">$attribute</span><span class="keyword">][</span><span class="string">'count'</span><span class="keyword">] == </span><span class="default">1 </span><span class="keyword">) {<br />        </span><span class="default">$retEntry</span><span class="keyword">[</span><span class="default">$attribute</span><span class="keyword">] = </span><span class="default">$entry</span><span class="keyword">[</span><span class="default">$attribute</span><span class="keyword">][</span><span class="default">0</span><span class="keyword">];<br />      } else {<br />        for ( </span><span class="default">$j </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$j </span><span class="keyword">&lt; </span><span class="default">$entry</span><span class="keyword">[</span><span class="default">$attribute</span><span class="keyword">][</span><span class="string">'count'</span><span class="keyword">]; </span><span class="default">$j</span><span class="keyword">++ ) {<br />          </span><span class="default">$retEntry</span><span class="keyword">[</span><span class="default">$attribute</span><span class="keyword">][] = </span><span class="default">$entry</span><span class="keyword">[</span><span class="default">$attribute</span><span class="keyword">][</span><span class="default">$j</span><span class="keyword">];<br />        }<br />      }<br />    }<br />  }<br />  return </span><span class="default">$retEntry</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span><br />Result is of the form :<br />array(256) {<br />  ["uid=doe,ou=People,dc=example,dc=net"]=&gt;<br />  array(3) {<br />    ["uid"]=&gt;<br />    string(4) "doe"<br />    ["cn"]=&gt;<br />    string(14) "John Doe"<br />    ["telephonenumber"]=&gt;<br />    string(4) "1234"<br />  }<br />  ["uid=foo,ou=People,dc=example,dc=net"]=&gt;<br />  ...</span></code></div>
  </div>
 </div>
  <div class="note" id="33180">  <div class="votes">
    <div id="Vu33180">
    <a href="/manual/vote-note.php?id=33180&amp;page=function.ldap-get-entries&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd33180">
    <a href="/manual/vote-note.php?id=33180&amp;page=function.ldap-get-entries&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V33180" title="83% like this...">
    4
    </div>
  </div>
  <a href="#33180" class="name">
  <strong class="user"><em>reaper at sci dot fi</em></strong></a><a class="genanchor" href="#33180"> &para;</a><div class="date" title="2003-06-18 06:09"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom33180">
<div class="phpcode"><code><span class="html">If you're dealing with Active Directory and need to get values like 'lastlogon', 'pwdlastset' or similar, you'll notice that AD gives the values as Windows FILETIME timestamps. That means, the values are 100-nanosecond units passed since 1.1.1600 00:00:00. <br /><br /> To convert these to unix timestamps which PHP's date functions understand, one easy way would be the following : <br /><br />function win_filetime_to_timestamp ($filetime) {<br /><br />  $win_secs = substr($filetime,0,strlen($filetime)-7); // divide by 10 000 000 to get seconds<br />  $unix_timestamp = ($win_secs - 11644473600); // 1.1.1600 -&gt; 1.1.1970 difference in seconds<br />  return $unix_timestamp;<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="35541">  <div class="votes">
    <div id="Vu35541">
    <a href="/manual/vote-note.php?id=35541&amp;page=function.ldap-get-entries&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd35541">
    <a href="/manual/vote-note.php?id=35541&amp;page=function.ldap-get-entries&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V35541" title="73% like this...">
    7
    </div>
  </div>
  <a href="#35541" class="name">
  <strong class="user"><em>mackstann / mack%at%incise%dot%org</em></strong></a><a class="genanchor" href="#35541"> &para;</a><div class="date" title="2003-09-04 11:50"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom35541">
<div class="phpcode"><code><span class="html">I find the ["count"] items in these arrays highly annoying, so I made a function to remove them recursively:<br /><br />function rCountRemover($arr) {<br />  foreach($arr as $key=&gt;$val) {<br />    # (int)0 == "count", so we need to use ===<br />    if($key === "count") <br />      unset($arr[$key]);<br />    elseif(is_array($val))<br />      $arr[$key] = rCountRemover($arr[$key]);<br />  }<br />  return $arr;<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="107267">  <div class="votes">
    <div id="Vu107267">
    <a href="/manual/vote-note.php?id=107267&amp;page=function.ldap-get-entries&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd107267">
    <a href="/manual/vote-note.php?id=107267&amp;page=function.ldap-get-entries&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V107267" title="65% like this...">
    7
    </div>
  </div>
  <a href="#107267" class="name">
  <strong class="user"><em>tomas dot hampl at gmail dot com</em></strong></a><a class="genanchor" href="#107267"> &para;</a><div class="date" title="2012-01-26 10:50"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom107267">
<div class="phpcode"><code><span class="html">It has been mentioned in the comments below, but the <span class="default">&lt;?php ldap_get_entries</span><span class="keyword">(</span><span class="default">$connection</span><span class="keyword">,</span><span class="default">$result</span><span class="keyword">) </span><span class="default">?&gt;</span> always makes all attributes into lower-case. I found out the hard way that if I'm running an ldap query against the corporate AD and then want to display some results, nothing is actually displayed unless the attribute names area in lower-case. <br /><br />Example:<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// connect to AD<br /></span><span class="keyword">include(</span><span class="string">'ad_con.php'</span><span class="keyword">);<br /></span><span class="comment">// limit attributes we want to look for<br /></span><span class="default">$attributes_ad </span><span class="keyword">= array(</span><span class="string">"displayName"</span><span class="keyword">,</span><span class="string">"description"</span><span class="keyword">,</span><span class="string">"cn"</span><span class="keyword">,</span><span class="string">"givenName"</span><span class="keyword">,</span><span class="string">"sn"</span><span class="keyword">,</span><span class="string">"mail"</span><span class="keyword">,</span><span class="string">"co"</span><span class="keyword">,</span><span class="string">"mobile"</span><span class="keyword">,</span><span class="string">"company"</span><span class="keyword">,</span><span class="string">"displayName"</span><span class="keyword">);<br /></span><span class="comment">// define base<br /></span><span class="default">$base </span><span class="keyword">=</span><span class="string">""</span><span class="keyword">;<br /><br /></span><span class="comment">// in my script I search based on e-mail, $email variable is passed from the form<br /></span><span class="default">$result </span><span class="keyword">= </span><span class="default">ldap_search</span><span class="keyword">(</span><span class="default">$conn</span><span class="keyword">, </span><span class="default">$base</span><span class="keyword">, </span><span class="string">"mail=</span><span class="default">$email</span><span class="string">*"</span><span class="keyword">, </span><span class="default">$attributes_ad</span><span class="keyword">) or die (</span><span class="string">"Error in search<br />        query"</span><span class="keyword">);<br /><br /></span><span class="comment">// put search results into the array ($conn variable is defined in the included 'ad_con.php')<br /></span><span class="default">$info </span><span class="keyword">= </span><span class="default">ldap_get_entries</span><span class="keyword">(</span><span class="default">$conn</span><span class="keyword">, </span><span class="default">$result</span><span class="keyword">);<br /><br /></span><span class="comment">//Now, to display the results we want:<br /> </span><span class="keyword">for (</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">$info</span><span class="keyword">[</span><span class="string">"count"</span><span class="keyword">]; </span><span class="default">$i</span><span class="keyword">++)<br />    {<br />    </span><span class="comment">// to show the attribute displayName (note the case!)<br />    </span><span class="keyword">echo </span><span class="default">$info</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">][</span><span class="string">"displayname"</span><span class="keyword">][</span><span class="default">0</span><span class="keyword">]<br />    <br />    }<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="126908">  <div class="votes">
    <div id="Vu126908">
    <a href="/manual/vote-note.php?id=126908&amp;page=function.ldap-get-entries&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126908">
    <a href="/manual/vote-note.php?id=126908&amp;page=function.ldap-get-entries&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126908" title="50% like this...">
    0
    </div>
  </div>
  <a href="#126908" class="name">
  <strong class="user"><em>Mauro</em></strong></a><a class="genanchor" href="#126908"> &para;</a><div class="date" title="2022-03-08 01:37"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom126908">
<div class="phpcode"><code><span class="html">To remove the annoying first entry (count) just use array_shift().</span></code></div>
  </div>
 </div>
  <div class="note" id="125083">  <div class="votes">
    <div id="Vu125083">
    <a href="/manual/vote-note.php?id=125083&amp;page=function.ldap-get-entries&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125083">
    <a href="/manual/vote-note.php?id=125083&amp;page=function.ldap-get-entries&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125083" title="no votes...">
    0
    </div>
  </div>
  <a href="#125083" class="name">
  <strong class="user"><em>peter dot mlich at volny dot cz</em></strong></a><a class="genanchor" href="#125083"> &para;</a><div class="date" title="2020-06-05 07:52"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom125083">
<div class="phpcode"><code><span class="html">public function entriesToArray($entries=array())<br />    {<br />    $list  = array();<br />    for($i=0;$i&lt;$entries['count'];$i++)<br />        {<br />        $row = array();<br />        $dn  = $entries[$i]['dn'];<br />        unset($entries[$i]['count']);<br />        unset($entries[$i]['dn']);<br />        foreach($entries[$i] as $key=&gt;$value)<br />            {<br />            if (is_int($key))<br />                {continue;}<br />            $list_in_col = array();<br />            foreach($value as $key2=&gt;$value2)<br />                {<br />                if (!is_int($key2))<br />                    {continue;}<br />                $list_in_col[] = $value2;<br />                }<br />            $row[$key] = $list_in_col;<br />            }<br />        $row['dn'] = $dn;<br />        $list[$i] = $row;<br />        }<br />    return $list;<br />    }<br /><br />/*<br />Format ldap entries to better array<br /><br />array (size=2)<br />  'count' =&gt; int 1<br />  0 =&gt; <br />    array (size=14)<br />      'ou' =&gt; <br />        array (size=2)<br />          'count' =&gt; int 1<br />          0 =&gt; string '03024' (length=5)<br />      0 =&gt; string 'ou' (length=2)<br />      'mail' =&gt; <br />        array (size=2)<br />          'count' =&gt; int 1<br />          0 =&gt; string 'name.surname@myfirm.cz' (length=22)<br />      1 =&gt; string 'mail' (length=4)<br />      'telephonenumber' =&gt; <br />        array (size=2)<br />          'count' =&gt; int 1<br />          0 =&gt; string '+420123456781' (length=13)<br />      2 =&gt; string 'telephonenumber' (length=15)<br />      'personaltitle' =&gt; <br />        array (size=2)<br />          'count' =&gt; int 1<br />          0 =&gt; string 'Ing.|' (length=4)<br />      3 =&gt; string 'personaltitle' (length=13)<br />      'sn' =&gt; <br />        array (size=2)<br />          'count' =&gt; int 1<br />          0 =&gt; string 'MySurname' (length=6)<br />      4 =&gt; string 'sn' (length=2)<br />      'givenname' =&gt; <br />        array (size=2)<br />          'count' =&gt; int 1<br />          0 =&gt; string 'MyName' (length=5)<br />      5 =&gt; string 'givenname' (length=9)<br />      'count' =&gt; int 6<br />      'dn' =&gt; string 'cn=mynickid,ou=users,o=mydepartmentid' (length=24)<br /><br />array (size=1)<br />  0 =&gt; <br />    array (size=7)<br />      'ou' =&gt; <br />        array (size=1)<br />          0 =&gt; string '03024' (length=5)<br />      'mail' =&gt; <br />        array (size=1)<br />          0 =&gt; string 'name.surname@myfirm.cz' (length=22)<br />      'telephonenumber' =&gt; <br />        array (size=1)<br />          0 =&gt; string '+420123456781' (length=13)<br />      'personaltitle' =&gt; <br />        array (size=1)<br />          0 =&gt; string 'Ing.|' (length=4)<br />      'sn' =&gt; <br />        array (size=1)<br />          0 =&gt; string 'MySurname' (length=6)<br />      'givenname' =&gt; <br />        array (size=1)<br />          0 =&gt; string 'MyName' (length=5)<br />      'dn' =&gt; string 'cn=mynickid,ou=users,o=mydepartmentid' (length=24)<br />*/</span></code></div>
  </div>
 </div>
  <div class="note" id="10239">  <div class="votes">
    <div id="Vu10239">
    <a href="/manual/vote-note.php?id=10239&amp;page=function.ldap-get-entries&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd10239">
    <a href="/manual/vote-note.php?id=10239&amp;page=function.ldap-get-entries&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V10239" title="100% like this...">
    1
    </div>
  </div>
  <a href="#10239" class="name">
  <strong class="user"><em>john at petbrain dot com</em></strong></a><a class="genanchor" href="#10239"> &para;</a><div class="date" title="2000-12-20 10:24"><strong>24 years ago</strong></div>
  <div class="text" id="Hcom10239">
<div class="phpcode"><code><span class="html">Just a note: an multidemnsional array is like an array with in an array.... you have myArray[2]-&gt; can refer to something like dc=americas,dc=icm,dc=org
<br />
<br />Basically you have more elements that are buried with in one element of the parent array[], myArray[2]
<br />
<br />So, thats why you see myArray[1]["dn"][0] ... pulling out the first element in myArray[1] and rollover the first element in it.</span></code></div>
  </div>
 </div>
  <div class="note" id="62145">  <div class="votes">
    <div id="Vu62145">
    <a href="/manual/vote-note.php?id=62145&amp;page=function.ldap-get-entries&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd62145">
    <a href="/manual/vote-note.php?id=62145&amp;page=function.ldap-get-entries&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V62145" title="50% like this...">
    0
    </div>
  </div>
  <a href="#62145" class="name">
  <strong class="user"><em>markus dot schabel at tgm dot ac dot at</em></strong></a><a class="genanchor" href="#62145"> &para;</a><div class="date" title="2006-02-21 12:20"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom62145">
<div class="phpcode"><code><span class="html">When you like to get the entry from LDAP in the same style as ldap_add(), then you can use the following function to convert this entry.<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">/**<br /> * Take an LDAP and make an associative array from it.<br /> * <br /> * This function takes an LDAP entry in the ldap_get_entries() style and<br /> * converts it to an associative array like ldap_add() needs.<br /> * <br /> * @param array $entry is the entry that should be converted.<br /> * <br /> * @return array is the converted entry.<br /> */<br /></span><span class="keyword">function </span><span class="default">cleanUpEntry</span><span class="keyword">( </span><span class="default">$entry </span><span class="keyword">) {<br />    </span><span class="default">$retEntry </span><span class="keyword">= array();<br />    for ( </span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$entry</span><span class="keyword">[</span><span class="string">'count'</span><span class="keyword">]; </span><span class="default">$i</span><span class="keyword">++ ) {<br />        </span><span class="default">$attribute </span><span class="keyword">= </span><span class="default">$entry</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">];<br />        if ( </span><span class="default">$entry</span><span class="keyword">[</span><span class="default">$attribute</span><span class="keyword">][</span><span class="string">'count'</span><span class="keyword">] == </span><span class="default">1 </span><span class="keyword">) {<br />            </span><span class="default">$retEntry</span><span class="keyword">[</span><span class="default">$attribute</span><span class="keyword">] = </span><span class="default">$entry</span><span class="keyword">[</span><span class="default">$attribute</span><span class="keyword">][</span><span class="default">0</span><span class="keyword">];<br />        } else {<br />            for ( </span><span class="default">$j </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$j </span><span class="keyword">&lt; </span><span class="default">$entry</span><span class="keyword">[</span><span class="default">$attribute</span><span class="keyword">][</span><span class="string">'count'</span><span class="keyword">]; </span><span class="default">$j</span><span class="keyword">++ ) {<br />                </span><span class="default">$retEntry</span><span class="keyword">[</span><span class="default">$attribute</span><span class="keyword">][] = </span><span class="default">$entry</span><span class="keyword">[</span><span class="default">$attribute</span><span class="keyword">][</span><span class="default">$j</span><span class="keyword">];<br />            }<br />        }<br />    }<br />    return </span><span class="default">$retEntry</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="61583">  <div class="votes">
    <div id="Vu61583">
    <a href="/manual/vote-note.php?id=61583&amp;page=function.ldap-get-entries&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd61583">
    <a href="/manual/vote-note.php?id=61583&amp;page=function.ldap-get-entries&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V61583" title="no votes...">
    0
    </div>
  </div>
  <a href="#61583" class="name">
  <strong class="user"><em>reuben dot helms at gmail dot com</em></strong></a><a class="genanchor" href="#61583"> &para;</a><div class="date" title="2006-02-07 01:13"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom61583">
<div class="phpcode"><code><span class="html">Helmuts programming example is incorrect.<br /><br />PHP arrays start from zero, so your first entry is $entry[0] and your last entry is $entry[$entry["count"] - 1].<br /><br />$entry[$entry["count"]] will never exist, thus his usage of is_null.<br /><br />Helmuts usage of is_null is not elegant, its just poor understanding of arrays.<br /><br />Save some confusion and remove Helmuts entry and this one.</span></code></div>
  </div>
 </div>
  <div class="note" id="54151">  <div class="votes">
    <div id="Vu54151">
    <a href="/manual/vote-note.php?id=54151&amp;page=function.ldap-get-entries&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd54151">
    <a href="/manual/vote-note.php?id=54151&amp;page=function.ldap-get-entries&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V54151" title="50% like this...">
    0
    </div>
  </div>
  <a href="#54151" class="name">
  <strong class="user"><em>Jim Granger &lt;tenor at jimgranger.com&gt;</em></strong></a><a class="genanchor" href="#54151"> &para;</a><div class="date" title="2005-06-24 02:27"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom54151">
<div class="phpcode"><code><span class="html">Another way of ignoring the last null entry would be to subtract one from the iteration count like this:<br /><br />for($i = 0; $i &lt; count($result_array) - 1; $i++)<br />{<br />     ...<br />}<br /><br />Helmut's method is far more elegant on its own but what I do is combine the above with the null test that he suggested. It may seem like overkill, but better safe than sorry.</span></code></div>
  </div>
 </div>
  <div class="note" id="14844">  <div class="votes">
    <div id="Vu14844">
    <a href="/manual/vote-note.php?id=14844&amp;page=function.ldap-get-entries&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd14844">
    <a href="/manual/vote-note.php?id=14844&amp;page=function.ldap-get-entries&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V14844" title="no votes...">
    0
    </div>
  </div>
  <a href="#14844" class="name">
  <strong class="user"><em>c dot green at its dot uq dot edu dot au</em></strong></a><a class="genanchor" href="#14844"> &para;</a><div class="date" title="2001-08-17 04:25"><strong>24 years ago</strong></div>
  <div class="text" id="Hcom14844">
<div class="phpcode"><code><span class="html">In response to the first message ldap_get_entries, I think there is some confusion with the dynamic typing of php.
<br />
<br />If the result is a string doing $foo[0] will return the first character of the string. 
<br />
<br />In the case of an array $foo[0] will return the entire first element.
<br />
<br />Its not to do with the 'dn' in particular, rather the fact that the dn is a scalar value (ie a string) rather than an array, and the indexing works differently in either case.
<br />
<br />For debugging purposes I would recommend using something like :
<br />
<br />$value = is_array($foo) ? $foo[0] : $foo;
<br />
<br />or 
<br />
<br />$value = is_array($foo) ? implode($foo, $delimiter) : $foo;</span></code></div>
  </div>
 </div>
  <div class="note" id="37391">  <div class="votes">
    <div id="Vu37391">
    <a href="/manual/vote-note.php?id=37391&amp;page=function.ldap-get-entries&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd37391">
    <a href="/manual/vote-note.php?id=37391&amp;page=function.ldap-get-entries&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V37391" title="0% like this...">
    -1
    </div>
  </div>
  <a href="#37391" class="name">
  <strong class="user"><em>Ovidiu Geaboc &lt;ogeaboc at rdanet.com&gt;</em></strong></a><a class="genanchor" href="#37391"> &para;</a><div class="date" title="2003-11-13 07:59"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom37391">
<div class="phpcode"><code><span class="html">I have found that ldap_get_entries() function doesn't handle binary data correctly.  I had to write my own using ldap_get_values_len(). <br /><br />// will use ldap_get_values_len() instead and build the array<br />// note: it's similar with the array returned by<br />// ldap_get_entries() except it has no "count" elements<br />$i=0;<br />$entry = ldap_first_entry($this-&gt;conn, $this-&gt;srchRslt);<br />do {<br />     $attributes = ldap_get_attributes($this-&gt;conn, $entry);<br />     for($j=0; $j&lt;$attributes['count']; $j++) {<br />        $values = ldap_get_values_len($this-&gt;conn, $entry,$attributes[$j]);<br />        $this-&gt;rawData[$i][$attributes[$j]] = $values; <br />     }          <br />     $i++;                <br />    } <br />while ($entry = ldap_next_entry($this-&gt;conn, $entry));<br />//we're done<br />return ($this-&gt;rawData);</span></code></div>
  </div>
 </div>
  <div class="note" id="18916">  <div class="votes">
    <div id="Vu18916">
    <a href="/manual/vote-note.php?id=18916&amp;page=function.ldap-get-entries&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd18916">
    <a href="/manual/vote-note.php?id=18916&amp;page=function.ldap-get-entries&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V18916" title="0% like this...">
    -1
    </div>
  </div>
  <a href="#18916" class="name">
  <strong class="user"><em>pmichaud at pobox dot com</em></strong></a><a class="genanchor" href="#18916"> &para;</a><div class="date" title="2002-02-09 06:43"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom18916">
<div class="phpcode"><code><span class="html">Actually, the fact that ldap_get_entries returns attribute names as lowercase is really annoying, because ldap_get_attributes apparently does not.  This is really annoying, especially when having arrays of attribute names and having to worry about which call was used to retrieve entries from LDAP.</span></code></div>
  </div>
 </div>
  <div class="note" id="5149">  <div class="votes">
    <div id="Vu5149">
    <a href="/manual/vote-note.php?id=5149&amp;page=function.ldap-get-entries&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd5149">
    <a href="/manual/vote-note.php?id=5149&amp;page=function.ldap-get-entries&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V5149" title="42% like this...">
    -1
    </div>
  </div>
  <a href="#5149" class="name">
  <strong class="user"><em>cbrent at orix dot com dot au</em></strong></a><a class="genanchor" href="#5149"> &para;</a><div class="date" title="2000-04-17 10:03"><strong>25 years ago</strong></div>
  <div class="text" id="Hcom5149">
<div class="phpcode"><code><span class="html">Note that ldap_get_entries return an associative array with the attributes in lower case.  So for example the givenName ldap attribute is associated with $ldap[0]["givenname"][0] (for the first given name for the first result) this is a little confusing at first.</span></code></div>
  </div>
 </div>
  <div class="note" id="12908">  <div class="votes">
    <div id="Vu12908">
    <a href="/manual/vote-note.php?id=12908&amp;page=function.ldap-get-entries&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd12908">
    <a href="/manual/vote-note.php?id=12908&amp;page=function.ldap-get-entries&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V12908" title="40% like this...">
    -1
    </div>
  </div>
  <a href="#12908" class="name">
  <strong class="user"><em>oscara at hinux dot hin dot no</em></strong></a><a class="genanchor" href="#12908"> &para;</a><div class="date" title="2001-05-15 09:51"><strong>24 years ago</strong></div>
  <div class="text" id="Hcom12908">
<div class="phpcode"><code><span class="html">Note: ldap_get_entries returns true even if no results are found, like this:
<br />
<br />echo $entries=ldap_get_entries(...);
<br />
<br />will print Array.
<br />
<br />You have to check for number of row in the Array like this:
<br />
<br />if($entries["count"]==0) return false;
<br />
<br />Hope this helped someone...</span></code></div>
  </div>
 </div>
  <div class="note" id="77971">  <div class="votes">
    <div id="Vu77971">
    <a href="/manual/vote-note.php?id=77971&amp;page=function.ldap-get-entries&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd77971">
    <a href="/manual/vote-note.php?id=77971&amp;page=function.ldap-get-entries&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V77971" title="40% like this...">
    -2
    </div>
  </div>
  <a href="#77971" class="name">
  <strong class="user"><em>asohn at aircanopy dot net</em></strong></a><a class="genanchor" href="#77971"> &para;</a><div class="date" title="2007-09-21 02:48"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom77971">
<div class="phpcode"><code><span class="html">Some code I put together. Maybe yall can benefit from it.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">search_results</span><span class="keyword">(</span><span class="default">$info</span><span class="keyword">) {<br />  foreach (</span><span class="default">$info </span><span class="keyword">as </span><span class="default">$inf</span><span class="keyword">) {<br />    if (</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$inf</span><span class="keyword">)) {<br />      foreach (</span><span class="default">$inf </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$in</span><span class="keyword">) {<br />        if ((</span><span class="default">count</span><span class="keyword">(</span><span class="default">$inf</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">]) - </span><span class="default">1</span><span class="keyword">) &gt; </span><span class="default">0</span><span class="keyword">) {<br />          if (</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$in</span><span class="keyword">)) {<br />            unset(</span><span class="default">$inf</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">][</span><span class="string">"count"</span><span class="keyword">]);<br />          }<br />          </span><span class="default">$results</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">] = </span><span class="default">$inf</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">];<br />        }<br />      }<br />    }<br />  }<br />  </span><span class="default">$results</span><span class="keyword">[</span><span class="string">"dn"</span><span class="keyword">] = </span><span class="default">explode</span><span class="keyword">(</span><span class="string">','</span><span class="keyword">, </span><span class="default">$info</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">][</span><span class="string">"dn"</span><span class="keyword">]);<br />  return </span><span class="default">$results</span><span class="keyword">;<br />}<br /><br /></span><span class="default">$user </span><span class="keyword">= </span><span class="string">"asohn"</span><span class="keyword">;<br /><br /></span><span class="default">$ds </span><span class="keyword">= </span><span class="default">ldap_connect</span><span class="keyword">(</span><span class="string">"ldap://DOMAIN.net"</span><span class="keyword">);<br />if (</span><span class="default">$ds</span><span class="keyword">) {<br />  </span><span class="default">$r </span><span class="keyword">= </span><span class="default">ldap_bind</span><span class="keyword">(</span><span class="default">$ds</span><span class="keyword">);<br />  </span><span class="default">$sr </span><span class="keyword">= </span><span class="default">ldap_search</span><span class="keyword">(</span><span class="default">$ds</span><span class="keyword">, </span><span class="string">"ou=customers,dc=DOMAIN,dc=net"</span><span class="keyword">, </span><span class="string">"uid="</span><span class="keyword">.</span><span class="default">$user</span><span class="keyword">);<br />  </span><span class="default">$info </span><span class="keyword">= </span><span class="default">ldap_get_entries</span><span class="keyword">(</span><span class="default">$ds</span><span class="keyword">, </span><span class="default">$sr</span><span class="keyword">);<br />  <br />  echo </span><span class="default">$info</span><span class="keyword">[</span><span class="string">"count"</span><span class="keyword">].</span><span class="string">" Search Result(s) for \""</span><span class="keyword">.</span><span class="default">$user</span><span class="keyword">.</span><span class="string">"\"\n"</span><span class="keyword">;<br />  <br />  </span><span class="default">$results </span><span class="keyword">= </span><span class="default">search_results</span><span class="keyword">(</span><span class="default">$info</span><span class="keyword">);<br />  foreach (</span><span class="default">$results </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$result</span><span class="keyword">) {<br />    echo </span><span class="string">"  "</span><span class="keyword">.</span><span class="default">$key</span><span class="keyword">.</span><span class="string">"\n"</span><span class="keyword">;<br />    if (</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$result</span><span class="keyword">)){<br />      foreach(</span><span class="default">$result </span><span class="keyword">as </span><span class="default">$res</span><span class="keyword">){<br />        echo </span><span class="string">"    "</span><span class="keyword">.</span><span class="default">$res</span><span class="keyword">.</span><span class="string">"\n"</span><span class="keyword">;<br />      }<br />    }<br />  }<br />  </span><span class="default">ldap_close</span><span class="keyword">(</span><span class="default">$ds</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="95937">  <div class="votes">
    <div id="Vu95937">
    <a href="/manual/vote-note.php?id=95937&amp;page=function.ldap-get-entries&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd95937">
    <a href="/manual/vote-note.php?id=95937&amp;page=function.ldap-get-entries&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V95937" title="40% like this...">
    -4
    </div>
  </div>
  <a href="#95937" class="name">
  <strong class="user"><em>Sebastien Troiani</em></strong></a><a class="genanchor" href="#95937"> &para;</a><div class="date" title="2010-01-29 05:39"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom95937">
<div class="phpcode"><code><span class="html">Looks like there is a limit on returned objects - only 1000 items are placed in the array</span></code></div>
  </div>
 </div>
  <div class="note" id="41763">  <div class="votes">
    <div id="Vu41763">
    <a href="/manual/vote-note.php?id=41763&amp;page=function.ldap-get-entries&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd41763">
    <a href="/manual/vote-note.php?id=41763&amp;page=function.ldap-get-entries&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V41763" title="33% like this...">
    -1
    </div>
  </div>
  <a href="#41763" class="name">
  <strong class="user"><em>helmut dot patay at scandio dot de</em></strong></a><a class="genanchor" href="#41763"> &para;</a><div class="date" title="2004-04-21 03:57"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom41763">
<div class="phpcode"><code><span class="html">If you loop over the entries, like<br />$entries = ldap_get_entries( $ds, $sr );<br />watch out!<br />you have to check with is_null the last entry<br />because you will get one entry more than the search found,<br />but the last one will be null<br />so you are safe if you do:<br />for ( $i = 0; $i &lt; count( $entries ); $i++ ) {<br />    if ( is_null( $entries[ $i ] ) ) continue;<br />    ...<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="90126">  <div class="votes">
    <div id="Vu90126">
    <a href="/manual/vote-note.php?id=90126&amp;page=function.ldap-get-entries&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd90126">
    <a href="/manual/vote-note.php?id=90126&amp;page=function.ldap-get-entries&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V90126" title="25% like this...">
    -2
    </div>
  </div>
  <a href="#90126" class="name">
  <strong class="user"><em>plonky at gmail dot com</em></strong></a><a class="genanchor" href="#90126"> &para;</a><div class="date" title="2009-04-07 09:09"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom90126">
<div class="phpcode"><code><span class="html">Hope this could help a bit others to print attribute and values on the same line. This is basic code of course <br /><br /><span class="default">&lt;?php<br /><br />$ldap_con </span><span class="keyword">= </span><span class="default">ldap_connect</span><span class="keyword">(</span><span class="default">$ldap_server</span><span class="keyword">) or die(</span><span class="string">"Could not connect to server. Error is " </span><span class="keyword">. </span><span class="default">ldap_error</span><span class="keyword">(</span><span class="default">$ldap_con</span><span class="keyword">));<br /></span><span class="default">$ldap_bd </span><span class="keyword">= </span><span class="default">ldap_bind</span><span class="keyword">(</span><span class="default">$ldap_con</span><span class="keyword">, </span><span class="default">$root_dn</span><span class="keyword">, </span><span class="default">$root_pw</span><span class="keyword">) or die(</span><span class="string">"Could not bind to server. Error is " </span><span class="keyword">.</span><span class="default">ldap_error</span><span class="keyword">(</span><span class="default">$ldap_con</span><span class="keyword">));<br /></span><span class="default">$result </span><span class="keyword">= </span><span class="default">ldap_search</span><span class="keyword">(</span><span class="default">$ldap_con</span><span class="keyword">, </span><span class="default">$personnel_base</span><span class="keyword">, </span><span class="string">"(uid=*)"</span><span class="keyword">) or die (</span><span class="string">"Error in query"</span><span class="keyword">);<br /><br /></span><span class="default">$data </span><span class="keyword">= </span><span class="default">ldap_get_entries</span><span class="keyword">(</span><span class="default">$ldap_con</span><span class="keyword">, </span><span class="default">$result</span><span class="keyword">);<br /><br />for (</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">&lt;=</span><span class="default">$data</span><span class="keyword">[</span><span class="string">"count"</span><span class="keyword">];</span><span class="default">$i</span><span class="keyword">++) {<br />        for (</span><span class="default">$j</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;</span><span class="default">$j</span><span class="keyword">&lt;=</span><span class="default">$data</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">][</span><span class="string">"count"</span><span class="keyword">];</span><span class="default">$j</span><span class="keyword">++){<br />        echo </span><span class="default">$data</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">][</span><span class="default">$j</span><span class="keyword">].</span><span class="string">": "</span><span class="keyword">.</span><span class="default">$data</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">][</span><span class="default">$data</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">][</span><span class="default">$j</span><span class="keyword">]][</span><span class="default">0</span><span class="keyword">].</span><span class="string">"\n"</span><span class="keyword">;<br />        }<br />}<br /></span><span class="default">ldap_close</span><span class="keyword">(</span><span class="default">$ldap_con</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.ldap-get-entries&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.ldap-get-entries.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.ldap.php">LDAP Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.ldap-8859-to-t61.php" title="ldap_&#8203;8859_&#8203;to_&#8203;t61">ldap_&#8203;8859_&#8203;to_&#8203;t61</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-add.php" title="ldap_&#8203;add">ldap_&#8203;add</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-add-ext.php" title="ldap_&#8203;add_&#8203;ext">ldap_&#8203;add_&#8203;ext</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-bind.php" title="ldap_&#8203;bind">ldap_&#8203;bind</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-bind-ext.php" title="ldap_&#8203;bind_&#8203;ext">ldap_&#8203;bind_&#8203;ext</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-close.php" title="ldap_&#8203;close">ldap_&#8203;close</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-compare.php" title="ldap_&#8203;compare">ldap_&#8203;compare</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-connect.php" title="ldap_&#8203;connect">ldap_&#8203;connect</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-connect-wallet.php" title="ldap_&#8203;connect_&#8203;wallet">ldap_&#8203;connect_&#8203;wallet</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-count-entries.php" title="ldap_&#8203;count_&#8203;entries">ldap_&#8203;count_&#8203;entries</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-count-references.php" title="ldap_&#8203;count_&#8203;references">ldap_&#8203;count_&#8203;references</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-delete.php" title="ldap_&#8203;delete">ldap_&#8203;delete</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-delete-ext.php" title="ldap_&#8203;delete_&#8203;ext">ldap_&#8203;delete_&#8203;ext</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-dn2ufn.php" title="ldap_&#8203;dn2ufn">ldap_&#8203;dn2ufn</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-err2str.php" title="ldap_&#8203;err2str">ldap_&#8203;err2str</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-errno.php" title="ldap_&#8203;errno">ldap_&#8203;errno</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-error.php" title="ldap_&#8203;error">ldap_&#8203;error</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-escape.php" title="ldap_&#8203;escape">ldap_&#8203;escape</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-exop.php" title="ldap_&#8203;exop">ldap_&#8203;exop</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-exop-passwd.php" title="ldap_&#8203;exop_&#8203;passwd">ldap_&#8203;exop_&#8203;passwd</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-exop-refresh.php" title="ldap_&#8203;exop_&#8203;refresh">ldap_&#8203;exop_&#8203;refresh</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-exop-sync.php" title="ldap_&#8203;exop_&#8203;sync">ldap_&#8203;exop_&#8203;sync</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-exop-whoami.php" title="ldap_&#8203;exop_&#8203;whoami">ldap_&#8203;exop_&#8203;whoami</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-explode-dn.php" title="ldap_&#8203;explode_&#8203;dn">ldap_&#8203;explode_&#8203;dn</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-first-attribute.php" title="ldap_&#8203;first_&#8203;attribute">ldap_&#8203;first_&#8203;attribute</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-first-entry.php" title="ldap_&#8203;first_&#8203;entry">ldap_&#8203;first_&#8203;entry</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-first-reference.php" title="ldap_&#8203;first_&#8203;reference">ldap_&#8203;first_&#8203;reference</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-free-result.php" title="ldap_&#8203;free_&#8203;result">ldap_&#8203;free_&#8203;result</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-get-attributes.php" title="ldap_&#8203;get_&#8203;attributes">ldap_&#8203;get_&#8203;attributes</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-get-dn.php" title="ldap_&#8203;get_&#8203;dn">ldap_&#8203;get_&#8203;dn</a>
                        </li>
                                                <li class="current">
                            <a href="function.ldap-get-entries.php" title="ldap_&#8203;get_&#8203;entries">ldap_&#8203;get_&#8203;entries</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-get-option.php" title="ldap_&#8203;get_&#8203;option">ldap_&#8203;get_&#8203;option</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-get-values.php" title="ldap_&#8203;get_&#8203;values">ldap_&#8203;get_&#8203;values</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-get-values-len.php" title="ldap_&#8203;get_&#8203;values_&#8203;len">ldap_&#8203;get_&#8203;values_&#8203;len</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-list.php" title="ldap_&#8203;list">ldap_&#8203;list</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-mod-add.php" title="ldap_&#8203;mod_&#8203;add">ldap_&#8203;mod_&#8203;add</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-mod_add-ext.php" title="ldap_&#8203;mod_&#8203;add_&#8203;ext">ldap_&#8203;mod_&#8203;add_&#8203;ext</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-mod-del.php" title="ldap_&#8203;mod_&#8203;del">ldap_&#8203;mod_&#8203;del</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-mod_del-ext.php" title="ldap_&#8203;mod_&#8203;del_&#8203;ext">ldap_&#8203;mod_&#8203;del_&#8203;ext</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-mod-replace.php" title="ldap_&#8203;mod_&#8203;replace">ldap_&#8203;mod_&#8203;replace</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-mod_replace-ext.php" title="ldap_&#8203;mod_&#8203;replace_&#8203;ext">ldap_&#8203;mod_&#8203;replace_&#8203;ext</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-modify.php" title="ldap_&#8203;modify">ldap_&#8203;modify</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-modify-batch.php" title="ldap_&#8203;modify_&#8203;batch">ldap_&#8203;modify_&#8203;batch</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-next-attribute.php" title="ldap_&#8203;next_&#8203;attribute">ldap_&#8203;next_&#8203;attribute</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-next-entry.php" title="ldap_&#8203;next_&#8203;entry">ldap_&#8203;next_&#8203;entry</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-next-reference.php" title="ldap_&#8203;next_&#8203;reference">ldap_&#8203;next_&#8203;reference</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-parse-exop.php" title="ldap_&#8203;parse_&#8203;exop">ldap_&#8203;parse_&#8203;exop</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-parse-reference.php" title="ldap_&#8203;parse_&#8203;reference">ldap_&#8203;parse_&#8203;reference</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-parse-result.php" title="ldap_&#8203;parse_&#8203;result">ldap_&#8203;parse_&#8203;result</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-read.php" title="ldap_&#8203;read">ldap_&#8203;read</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-rename.php" title="ldap_&#8203;rename">ldap_&#8203;rename</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-rename-ext.php" title="ldap_&#8203;rename_&#8203;ext">ldap_&#8203;rename_&#8203;ext</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-sasl-bind.php" title="ldap_&#8203;sasl_&#8203;bind">ldap_&#8203;sasl_&#8203;bind</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-search.php" title="ldap_&#8203;search">ldap_&#8203;search</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-set-option.php" title="ldap_&#8203;set_&#8203;option">ldap_&#8203;set_&#8203;option</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-set-rebind-proc.php" title="ldap_&#8203;set_&#8203;rebind_&#8203;proc">ldap_&#8203;set_&#8203;rebind_&#8203;proc</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-sort.php" title="ldap_&#8203;sort">ldap_&#8203;sort</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-start-tls.php" title="ldap_&#8203;start_&#8203;tls">ldap_&#8203;start_&#8203;tls</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-t61-to-8859.php" title="ldap_&#8203;t61_&#8203;to_&#8203;8859">ldap_&#8203;t61_&#8203;to_&#8203;8859</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-unbind.php" title="ldap_&#8203;unbind">ldap_&#8203;unbind</a>
                        </li>
                        
                    </ul>
                
            </li>
                        
                        <li>
                <span class="header">Deprecated</span>
                <ul class="child-menu-list">
                                    <li class="">
                        <a href="function.ldap-control-paged-result.php" title="ldap_&#8203;control_&#8203;paged_&#8203;result">ldap_&#8203;control_&#8203;paged_&#8203;result</a>
                    </li>
                                    <li class="">
                        <a href="function.ldap-control-paged-result-response.php" title="ldap_&#8203;control_&#8203;paged_&#8203;result_&#8203;response">ldap_&#8203;control_&#8203;paged_&#8203;result_&#8203;response</a>
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
