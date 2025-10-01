<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: odbc_field_name - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.odbc-field-name.php">
 <link rel="shorturl" href="https://www.php.net/odbc-field-name">
 <link rel="alternate" href="https://www.php.net/odbc-field-name" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.uodbc.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.odbc-field-len.php">
 <link rel="next" href="https://www.php.net/manual/en/function.odbc-field-num.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.odbc-field-name.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.odbc-field-name.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.odbc-field-name.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.odbc-field-name.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.odbc-field-name.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.odbc-field-name.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.odbc-field-name.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.odbc-field-name.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.odbc-field-name.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.odbc-field-name.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.odbc-field-name.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Get the columnname" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: odbc_field_name - Manual" />
<meta name="twitter:description" content="Get the columnname" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: odbc_field_name - Manual" />
<meta itemprop="description" content="Get the columnname" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Get the columnname" />

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
        <a href="function.odbc-field-num.php">
          odbc_field_num &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.odbc-field-len.php">
          &laquo; odbc_field_len        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.database.php'>Database Extensions</a></li>      <li><a href='refs.database.abstract.php'>Abstraction Layers</a></li>      <li><a href='book.uodbc.php'>ODBC</a></li>      <li><a href='ref.uodbc.php'>ODBC Functions</a></li>      </ul>
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
            <option value='en/function.odbc-field-name.php' selected="selected">English</option>
            <option value='de/function.odbc-field-name.php'>German</option>
            <option value='es/function.odbc-field-name.php'>Spanish</option>
            <option value='fr/function.odbc-field-name.php'>French</option>
            <option value='it/function.odbc-field-name.php'>Italian</option>
            <option value='ja/function.odbc-field-name.php'>Japanese</option>
            <option value='pt_BR/function.odbc-field-name.php'>Brazilian Portuguese</option>
            <option value='ru/function.odbc-field-name.php'>Russian</option>
            <option value='tr/function.odbc-field-name.php'>Turkish</option>
            <option value='uk/function.odbc-field-name.php'>Ukrainian</option>
            <option value='zh/function.odbc-field-name.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.odbc-field-name" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">odbc_field_name</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">odbc_field_name</span> &mdash; <span class="dc-title">Get the columnname</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.odbc-field-name-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>odbc_field_name</strong></span>(<span class="methodparam"><span class="type">Odbc\Result</span> <code class="parameter">$statement</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$field</code></span>): <span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">
   Gets the name of the field occupying the given column number in the given
   result object.
  </p>
 </div>

 <div class="refsect1 parameters" id="refsect1-function.odbc-field-name-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">statement</code></dt>
     <dd>
      <p class="para">
       The ODBC result object.
      </p>
     </dd>
    
    
     <dt><code class="parameter">field</code></dt>
     <dd>
      <p class="para">
       The field number. Field numbering starts at 1.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>

 <div class="refsect1 returnvalues" id="refsect1-function.odbc-field-name-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns the field name as a string, or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on error.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.odbc-field-name-changelog">
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
 <td>8.4.0</td>
 <td>
  <code class="parameter">statement</code> expects an <span class="classname"><strong class="classname">Odbc\Result</strong></span>
  instance now; previously, a <span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span> was expected.
 </td>
</tr>

    </tbody>
   
  </table>

 </div>

</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/uodbc/functions/odbc-field-name.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.odbc-field-name%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.odbc-field-name&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.odbc-field-name.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">11 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="41522">  <div class="votes">
    <div id="Vu41522">
    <a href="/manual/vote-note.php?id=41522&amp;page=function.odbc-field-name&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd41522">
    <a href="/manual/vote-note.php?id=41522&amp;page=function.odbc-field-name&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V41522" title="80% like this...">
    3
    </div>
  </div>
  <a href="#41522" class="name">
  <strong class="user"><em>hayes029 at bama dot ua dot edu</em></strong></a><a class="genanchor" href="#41522"> &para;</a><div class="date" title="2004-04-13 10:01"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom41522">
<div class="phpcode"><code><span class="html">In search of a function that would simply return an array with the names of the fields in a result identifier, the only thing I could find was the odbc_field_name function.  So, for anyone else looking for such a function, here's the (very simple) function I wrote:<br /><br />function odbc_field_names ($result) {<br />  for ($i=1; $i &lt;= odbc_num_fields($result); $i++) $return_array[$i-1] = odbc_field_name($result, $i);<br />  return $return_array;<br />}<br /><br />Very simple, I know, but I thought it might be helpful.</span></code></div>
  </div>
 </div>
  <div class="note" id="90533">  <div class="votes">
    <div id="Vu90533">
    <a href="/manual/vote-note.php?id=90533&amp;page=function.odbc-field-name&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd90533">
    <a href="/manual/vote-note.php?id=90533&amp;page=function.odbc-field-name&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V90533" title="50% like this...">
    0
    </div>
  </div>
  <a href="#90533" class="name">
  <strong class="user"><em>anuga at anuga dot se</em></strong></a><a class="genanchor" href="#90533"> &para;</a><div class="date" title="2009-04-27 12:46"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom90533">
<div class="phpcode"><code><span class="html">I've been toying around with this for awhile to make it as simple and fast as possible.<br /> <br /><span class="default">&lt;?php<br /><br /></span><span class="comment">/* Start The Connection */<br /></span><span class="keyword">if(!</span><span class="default">$odbc</span><span class="keyword">[</span><span class="string">'connection'</span><span class="keyword">] = </span><span class="default">odbc_connect</span><span class="keyword">(</span><span class="string">'DNS'</span><span class="keyword">,</span><span class="string">'USER'</span><span class="keyword">,</span><span class="string">'PASS'</span><span class="keyword">))<br />{<br />    exit(</span><span class="string">"Connection Failed&lt;br /&gt;\n"</span><span class="keyword">);<br />}<br />else<br />{<br />    echo(</span><span class="string">"Connected&lt;br /&gt;\n"</span><span class="keyword">);<br />}<br /><br /></span><span class="comment">/* Select Which Table */<br /></span><span class="default">$odbc</span><span class="keyword">[</span><span class="string">'table'</span><span class="keyword">] = </span><span class="string">"table"</span><span class="keyword">;<br /><br /></span><span class="comment">/* Fetch The Fieldnames into an Array */<br /></span><span class="keyword">if(</span><span class="default">$result </span><span class="keyword">= </span><span class="default">odbc_exec</span><span class="keyword">(</span><span class="default">$odbc</span><span class="keyword">[</span><span class="string">'connection'</span><span class="keyword">],</span><span class="string">"select * from </span><span class="default">$odbc</span><span class="keyword">[</span><span class="string">'table'];"</span><span class="keyword">))<br />{<br />    for(</span><span class="default">$i </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">;</span><span class="default">$i </span><span class="keyword">&lt;= </span><span class="default">odbc_num_fields</span><span class="keyword">(</span><span class="default">$result</span><span class="keyword">);</span><span class="default">$i</span><span class="keyword">++)<br />    {<br />        </span><span class="default">$odbc</span><span class="keyword">[</span><span class="string">'rows'</span><span class="keyword">][</span><span class="string">'fields'</span><span class="keyword">][</span><span class="default">$i</span><span class="keyword">] = </span><span class="default">odbc_field_name</span><span class="keyword">(</span><span class="default">$result</span><span class="keyword">,</span><span class="default">$i</span><span class="keyword">);<br />    }<br />    unset(</span><span class="default">$i</span><span class="keyword">);<br />    </span><span class="default">odbc_free_result</span><span class="keyword">(</span><span class="default">$result</span><span class="keyword">);<br />}<br />else<br />{<br />    exit(</span><span class="string">"Error in SQL Query"</span><span class="keyword">);<br />}<br /><br /></span><span class="comment">/* Close The Connection */<br /></span><span class="keyword">if(</span><span class="default">odbc_close</span><span class="keyword">(</span><span class="default">$odbc</span><span class="keyword">[</span><span class="string">'connection'</span><span class="keyword">]))<br />{<br />    </span><span class="default">odbc_close</span><span class="keyword">(</span><span class="default">$odbc</span><span class="keyword">[</span><span class="string">'connection'</span><span class="keyword">]);<br />}<br /><br /></span><span class="comment">/* Print The Array */<br /></span><span class="keyword">if(!empty(</span><span class="default">$odbc</span><span class="keyword">[</span><span class="string">'rows'</span><span class="keyword">]))<br />{<br />    </span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$odbc</span><span class="keyword">[</span><span class="string">'rows'</span><span class="keyword">]);<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="86829">  <div class="votes">
    <div id="Vu86829">
    <a href="/manual/vote-note.php?id=86829&amp;page=function.odbc-field-name&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd86829">
    <a href="/manual/vote-note.php?id=86829&amp;page=function.odbc-field-name&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V86829" title="50% like this...">
    0
    </div>
  </div>
  <a href="#86829" class="name">
  <strong class="user"><em>sica at wnet dot com dot br</em></strong></a><a class="genanchor" href="#86829"> &para;</a><div class="date" title="2008-11-05 10:39"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom86829">
<div class="phpcode"><code><span class="html">Hi hayes029, your idea was very helpful.<br />Here go a adaptation for select form field.<br /><span class="default">&lt;?php<br />  $consulta </span><span class="keyword">= </span><span class="string">"select * from schema.table"</span><span class="keyword">;<br />  </span><span class="default">$resposta </span><span class="keyword">= </span><span class="default">odbc_exec</span><span class="keyword">(</span><span class="default">$con</span><span class="keyword">, </span><span class="default">$consulta</span><span class="keyword">);<br />  for(</span><span class="default">$i</span><span class="keyword">=</span><span class="default">1</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt;= </span><span class="default">odbc_num_fields</span><span class="keyword">(</span><span class="default">$resposta</span><span class="keyword">); </span><span class="default">$i</span><span class="keyword">++)<br />    echo </span><span class="string">"&lt;option value="</span><span class="keyword">.</span><span class="default">odbc_field_name</span><span class="keyword">(</span><span class="default">$resposta</span><span class="keyword">, </span><span class="default">$i</span><span class="keyword">).</span><span class="string">"&gt;"</span><span class="keyword">.</span><span class="default">odbc_field_name</span><span class="keyword">(</span><span class="default">$resposta</span><span class="keyword">, </span><span class="default">$i</span><span class="keyword">).</span><span class="string">"&lt;/option&gt;"</span><span class="keyword">;<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="81110">  <div class="votes">
    <div id="Vu81110">
    <a href="/manual/vote-note.php?id=81110&amp;page=function.odbc-field-name&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd81110">
    <a href="/manual/vote-note.php?id=81110&amp;page=function.odbc-field-name&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V81110" title="no votes...">
    0
    </div>
  </div>
  <a href="#81110" class="name">
  <strong class="user"><em>marco</em></strong></a><a class="genanchor" href="#81110"> &para;</a><div class="date" title="2008-02-14 06:08"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom81110">
<div class="phpcode"><code><span class="html">we faced the 31 char limit using cakephp dbo_odbc.php class (version 1.1.18.5850)<br /><br />at the end, it calls odbc_fetch_row giving the problem (i tracked it may be due to the php implementation of a ODBCv2 model, which has hard coded 4bytes, 32 bits file names length, while ODBCv3 seems to have a separate specification of that value, fwiw)<br /><br />we learned from another user (having similar problems with dbo_mssql.php class) how to workaround this problem, <br /><br />we solved using inheritance, redefining the method (locally to our application) in order to <br />- create a "map" of the query fields (as an array) before executing it<br />- execute the query in a non-associative way<br />- after the results are returned, restore the real field names applying the previous created "map" <br /><br />another way could be use the COM like:<br />new COM("ADODB.Connection")<br />which does not show the 31 chars problem but it could be slower and bound to the windows platform.</span></code></div>
  </div>
 </div>
  <div class="note" id="79354">  <div class="votes">
    <div id="Vu79354">
    <a href="/manual/vote-note.php?id=79354&amp;page=function.odbc-field-name&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd79354">
    <a href="/manual/vote-note.php?id=79354&amp;page=function.odbc-field-name&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V79354" title="no votes...">
    0
    </div>
  </div>
  <a href="#79354" class="name">
  <strong class="user"><em>NoEgzit</em></strong></a><a class="genanchor" href="#79354"> &para;</a><div class="date" title="2007-11-22 06:23"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom79354">
<div class="phpcode"><code><span class="html">If you really need more than 31 characters here's what you can do:<br /><br />open php5.x.x/ext/odbc/php_odbc_includes.h in an editor like notepad++<br /><br />change 32 by a greater value in <br />typedef struct odbc_result_value {<br />    char name[32];<br />    char *value;<br />    SDWORD vallen;<br />    SDWORD coltype;<br />} odbc_result_value;<br /><br />and recompile php.<br /><br />I did it with char name[64] cause I have column names like "0214_1_VD_Type d'exploitation Type d'opération (Niveau 1)"  [I didn't choose this stupid name it comes from Eccairs project]<br />and rebuild php with the method given here <a href="http://www.php.net/manual/en/install.windows.building.php" rel="nofollow" target="_blank">http://www.php.net/manual/en/install.windows.building.php</a>  and <a href="http://elizabethmariesmith.com/2006/11/09/" rel="nofollow" target="_blank">http://elizabethmariesmith.com/2006/11/09/</a><br />compiling-php52-on-windows-with-net-toolchain-is-it-even-possible/<br /><br />with visual C++ express edition.</span></code></div>
  </div>
 </div>
  <div class="note" id="62163">  <div class="votes">
    <div id="Vu62163">
    <a href="/manual/vote-note.php?id=62163&amp;page=function.odbc-field-name&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd62163">
    <a href="/manual/vote-note.php?id=62163&amp;page=function.odbc-field-name&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V62163" title="no votes...">
    0
    </div>
  </div>
  <a href="#62163" class="name">
  <strong class="user"><em>jezzghost</em></strong></a><a class="genanchor" href="#62163"> &para;</a><div class="date" title="2006-02-21 10:32"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom62163">
<div class="phpcode"><code><span class="html">Note that there is a known limitation with this which truncates the length of the returned field name to 31 characters without warning.</span></code></div>
  </div>
 </div>
  <div class="note" id="31652">  <div class="votes">
    <div id="Vu31652">
    <a href="/manual/vote-note.php?id=31652&amp;page=function.odbc-field-name&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd31652">
    <a href="/manual/vote-note.php?id=31652&amp;page=function.odbc-field-name&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V31652" title="no votes...">
    0
    </div>
  </div>
  <a href="#31652" class="name">
  <strong class="user"><em>andrea dot galli at acotel dot com</em></strong></a><a class="genanchor" href="#31652"> &para;</a><div class="date" title="2003-04-29 08:12"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom31652">
<div class="phpcode"><code><span class="html">Example: function field name.<br /><br />$Link_ID = odbc_connect("DSN", "user", "pass");<br /><br />$query = "SELECT * FROM products";<br /><br />$Query_ID = odbc_exec($Link_ID, $query);<br /><br />while($field = $field_name($Query_ID ))<br />{<br />     echo("Field: $field&lt;br /&gt;\n");<br />}<br /><br />---------------------<br /><br />function field_name($PrQuery_ID)<br />{       <br />     if($Column &lt; odbc_num_fields($PrQuery_ID))<br />     {       <br />          $Column += 1;<br />          $FieldName = odbc_field_name($PrQuery_ID, $Column);<br /><br />          return $FieldName;<br />     }       <br />     else    <br />     {       <br />          return 0;<br />     }       <br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="31313">  <div class="votes">
    <div id="Vu31313">
    <a href="/manual/vote-note.php?id=31313&amp;page=function.odbc-field-name&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd31313">
    <a href="/manual/vote-note.php?id=31313&amp;page=function.odbc-field-name&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V31313" title="50% like this...">
    0
    </div>
  </div>
  <a href="#31313" class="name">
  <strong class="user"><em>aleckzandr at yahoo dot com</em></strong></a><a class="genanchor" href="#31313"> &para;</a><div class="date" title="2003-04-17 12:04"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom31313">
<div class="phpcode"><code><span class="html">Well, I've been into PHP for four hours and thanks to "my predecessors before me" (gold163, curt, et al.) I've managed the following. The first thing I try to learn with any web scripting language is to build a dynamic table from a data source. (One thing you didn't have to do gold -previous post- is build an array for the field value.) Cheers! Alex<br /><br />&lt;html&gt;<br /> &lt;head&gt;<br />  &lt;title&gt;PHP Database Example&lt;/title&gt;<br /> &lt;/head&gt;<br /> &lt;style type="text/css"&gt;<br /> &lt;!--<br />  body {font: 10pt/12pt Tahoma, Verdana, Helvetica, sans-serif; color: indigo; margin: .25in .5in }<br />  table {color:Navy; background-color:AntiqueWhite; border-color:Maroon; border-style:Solid; border-width: 2px; }<br />  th {color: blue; font-weight: bold; }<br />  td {font-size: smaller; }<br />  .mytable {color:Maroon; background-color:White; border-color:Navy; border-style:Solid; border-width: 1px; }<br />  th.mytable {background-color:#C0C0C0; }<br /> //--&gt;<br /> &lt;/style&gt;<br /> &lt;body&gt;<br /><br /> &lt;p&gt;<span class="default">&lt;?php </span><span class="keyword">echo </span><span class="default">date</span><span class="keyword">(</span><span class="string">"j F, Y"</span><span class="keyword">); </span><span class="default">?&gt;</span>&lt;/p&gt;<br /><span class="default">&lt;?php<br /><br />$db </span><span class="keyword">= </span><span class="default">odbc_connect</span><span class="keyword">(</span><span class="string">"eSell22MDB"</span><span class="keyword">,</span><span class="string">""</span><span class="keyword">,</span><span class="string">""</span><span class="keyword">);<br /></span><span class="default">$result </span><span class="keyword">= </span><span class="default">odbc_exec</span><span class="keyword">(</span><span class="default">$db</span><span class="keyword">, </span><span class="string">"select ProductID, ProductName, Description1 from Products"</span><span class="keyword">);<br /><br /></span><span class="comment">// cool function - returns table<br /></span><span class="default">odbc_result_all</span><span class="keyword">(</span><span class="default">$result</span><span class="keyword">, </span><span class="string">"border=\"1\" class=\"def\""</span><span class="keyword">);<br /><br /></span><span class="default">$result </span><span class="keyword">= </span><span class="default">odbc_exec</span><span class="keyword">(</span><span class="default">$db</span><span class="keyword">, </span><span class="string">"select * from Products"</span><span class="keyword">) or die(</span><span class="string">"Select failed"</span><span class="keyword">);<br /><br /></span><span class="default">$myUtil </span><span class="keyword">= new </span><span class="default">Utilities</span><span class="keyword">();<br /><br /></span><span class="default">$myUtil</span><span class="keyword">-&gt;</span><span class="default">standard_table</span><span class="keyword">(</span><span class="default">$result</span><span class="keyword">,</span><span class="string">"mytable"</span><span class="keyword">);<br /><br />class </span><span class="default">Utilities </span><span class="keyword">{<br /><br />     function </span><span class="default">standard_table</span><span class="keyword">(</span><span class="default">$result</span><span class="keyword">,</span><span class="default">$class</span><span class="keyword">=</span><span class="string">""</span><span class="keyword">)<br />     {<br />         </span><span class="comment">// To format your table if you want to use cascading style sheets<br />         </span><span class="keyword">if (</span><span class="default">$class </span><span class="keyword">== </span><span class="string">""</span><span class="keyword">)<br />         {<br />             </span><span class="default">$css_table </span><span class="keyword">= </span><span class="string">" border=\"1\""</span><span class="keyword">;<br />             </span><span class="default">$css_tr </span><span class="keyword">= </span><span class="string">""</span><span class="keyword">;<br />             </span><span class="default">$css_th </span><span class="keyword">= </span><span class="string">""</span><span class="keyword">;<br />             </span><span class="default">$css_td </span><span class="keyword">= </span><span class="string">""</span><span class="keyword">; <br />         }<br />         else<br />         {<br />             </span><span class="default">$css_table </span><span class="keyword">= </span><span class="string">" class=\"</span><span class="default">$class</span><span class="string">\""</span><span class="keyword">;<br />             </span><span class="default">$css_tr </span><span class="keyword">= </span><span class="string">" class=\"</span><span class="default">$class</span><span class="string">\""</span><span class="keyword">;<br />             </span><span class="default">$css_th </span><span class="keyword">= </span><span class="string">" class=\"</span><span class="default">$class</span><span class="string">\""</span><span class="keyword">;<br />             </span><span class="default">$css_td </span><span class="keyword">= </span><span class="string">" class=\"</span><span class="default">$class</span><span class="string">\""</span><span class="keyword">; <br />         }<br /><br />         </span><span class="comment">// Create field names for table header row<br />         </span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; <br />         </span><span class="default">$fieldCount </span><span class="keyword">= </span><span class="default">odbc_num_fields</span><span class="keyword">(</span><span class="default">$result</span><span class="keyword">); <br />         echo </span><span class="string">"  &lt;table</span><span class="default">$css_table</span><span class="string">&gt;\n"</span><span class="keyword">;<br />         echo </span><span class="string">"   &lt;tr</span><span class="default">$css_tr</span><span class="string">&gt;\n"</span><span class="keyword">;<br /><br />         while (</span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$fieldCount</span><span class="keyword">) <br />         { <br />             </span><span class="default">$i</span><span class="keyword">++; <br />             </span><span class="default">$fieldName </span><span class="keyword">= </span><span class="default">odbc_field_name</span><span class="keyword">(</span><span class="default">$result</span><span class="keyword">, </span><span class="default">$i</span><span class="keyword">); <br />             echo </span><span class="string">"    &lt;th</span><span class="default">$css_th</span><span class="string">&gt;</span><span class="default">$fieldName</span><span class="string">&lt;/th&gt;\n"</span><span class="keyword">; <br />         } <br />         echo </span><span class="string">"   &lt;/tr&gt;\n"</span><span class="keyword">;<br /><br />         </span><span class="comment"># Create table data rows for query result<br />         </span><span class="keyword">while (</span><span class="default">odbc_fetch_row</span><span class="keyword">(</span><span class="default">$result</span><span class="keyword">)) <br />         {<br />             </span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; <br />             echo </span><span class="string">"   &lt;tr</span><span class="default">$css_tr</span><span class="string">&gt;\n"</span><span class="keyword">; <br />             while (</span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$fieldCount</span><span class="keyword">) <br />             { <br />                 </span><span class="default">$i</span><span class="keyword">++; <br />                 </span><span class="default">$fieldData </span><span class="keyword">= </span><span class="default">trim</span><span class="keyword">(</span><span class="default">odbc_result</span><span class="keyword">(</span><span class="default">$result</span><span class="keyword">, </span><span class="default">$i</span><span class="keyword">));<br />                 if (</span><span class="default">$fieldData  </span><span class="keyword">== </span><span class="string">""</span><span class="keyword">)<br />                     echo </span><span class="string">"    &lt;td</span><span class="default">$css_td</span><span class="string">&gt;&amp;nbsp;&lt;/td&gt;\n"</span><span class="keyword">;<br />                 else <br />                     echo </span><span class="string">"    &lt;td</span><span class="default">$css_td</span><span class="string">&gt;</span><span class="default">$fieldData</span><span class="string">&lt;/td&gt;\n"</span><span class="keyword">; <br />             } <br />             echo </span><span class="string">"   &lt;/tr&gt;\n"</span><span class="keyword">;<br />         }<br />         echo </span><span class="string">"  &lt;/table&gt;"</span><span class="keyword">;<br />     }<br />} </span><span class="comment">// class Utilities<br /><br /></span><span class="default">?&gt;<br /></span><br /> &lt;/body&gt;<br />&lt;/html&gt;</span></code></div>
  </div>
 </div>
  <div class="note" id="30697">  <div class="votes">
    <div id="Vu30697">
    <a href="/manual/vote-note.php?id=30697&amp;page=function.odbc-field-name&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd30697">
    <a href="/manual/vote-note.php?id=30697&amp;page=function.odbc-field-name&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V30697" title="no votes...">
    0
    </div>
  </div>
  <a href="#30697" class="name">
  <strong class="user"><em>gold163 at lisco dot com</em></strong></a><a class="genanchor" href="#30697"> &para;</a><div class="date" title="2003-03-25 09:10"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom30697">
<div class="phpcode"><code><span class="html">Using your code, and taking it a step further, I can create a standard table from a single line of code by calling a function from my include file - the bonus is, that I can optionally provide a parameter for the name of my style sheet class - further simplifying my formatting of the table.<br /><br />What synergy you find in these forums - eh?<br /><br />$Conn = odbc_connect('dsn','user','pass');<br />$query = "SELECT * FROM yourtable"; <br />$result = odbc_exec($Conn, $query) or die('Select failed!'); <br /><br />standard_table($result);<br /><br />Function standard_table($result,$class='')<br />{<br /># To format your table if you want to use cascading style sheets<br /> if ($class == '')<br /> {<br />  $css_table = ' border=1';<br />  $css_tr = '';<br />  $css_th = '';<br />  $css_td = ''; <br /> }<br /> else<br /> {<br />  $css_table = ' class=\"$class\"';<br />  $css_tr = ' class=\"$class\"';<br />  $css_th = ' class=\"$class\"';<br />  $css_td = ' class=\"$class\"'; <br /> }<br /><br /># Create field names for table header row<br />$i = 0; <br />$fCount = odbc_num_fields($result); <br />echo "&lt;table$css_table&gt;&lt;tr&gt;";<br />  while ($i &lt; $fCount) <br />  { <br />    $i++; <br />    $fName = odbc_field_name($result, $i); <br />    echo "&lt;th&gt;$fName&lt;/th&gt;"; <br />  } <br />echo "&lt;/tr&gt;";<br /><br /># Create table data rows for query result<br />$i = 0; <br />$fCount = odbc_num_fields($result); <br />while (odbc_fetch_row($result)) <br />{<br />echo "&lt;tr&gt;"; <br />  while ($i &lt; $fCount) <br />  { <br />    $i++; <br />    $fName = odbc_field_name($result, $i); <br />    $job[$fName] = odbc_result($result, $i); <br />    echo "&lt;td&gt;$job[$fName]&lt;/td&gt;"; <br />  } <br />echo "&lt;/tr&gt;";<br />$i = 0; <br />}<br />echo "&lt;/table&gt;";<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="11866">  <div class="votes">
    <div id="Vu11866">
    <a href="/manual/vote-note.php?id=11866&amp;page=function.odbc-field-name&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd11866">
    <a href="/manual/vote-note.php?id=11866&amp;page=function.odbc-field-name&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V11866" title="no votes...">
    0
    </div>
  </div>
  <a href="#11866" class="name"><strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#11866"> &para;</a><div class="date" title="2001-03-10 04:11"><strong>24 years ago</strong></div>
  <div class="text" id="Hcom11866">
<div class="phpcode"><code><span class="html">Wow, I finally have something to contribute.
<br />If you, like me, have been seeking a way to name and fill your variables with the appropriate names an values, rather than naming every variable and using odbc_result($result, 1), odbc_result($result, 2), etc...Then this little loop is for you!  It would probably be nice to use as function, but I'm sure you can do that on your own, eh?
<br />
<br /><span class="default">&lt;?php
<br />$query </span><span class="keyword">= </span><span class="string">"SELECT * FROM TableName"</span><span class="keyword">;
<br /></span><span class="default">$result </span><span class="keyword">= </span><span class="default">odbc_exec</span><span class="keyword">(</span><span class="default">$conn</span><span class="keyword">, </span><span class="default">$query</span><span class="keyword">) or die(</span><span class="string">'Select failed!'</span><span class="keyword">);
<br /></span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;
<br /></span><span class="default">$fCount </span><span class="keyword">= </span><span class="default">odbc_num_fields</span><span class="keyword">(</span><span class="default">$result</span><span class="keyword">);
<br />
<br />while (</span><span class="default">odbc_fetch_row</span><span class="keyword">(</span><span class="default">$result</span><span class="keyword">)) {
<br />    while (</span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$fCount</span><span class="keyword">) {
<br />        </span><span class="default">$i</span><span class="keyword">++;
<br />        </span><span class="default">$fName </span><span class="keyword">= </span><span class="default">odbc_field_name</span><span class="keyword">(</span><span class="default">$result</span><span class="keyword">, </span><span class="default">$i</span><span class="keyword">);
<br />        </span><span class="default">$job</span><span class="keyword">[</span><span class="default">$fName</span><span class="keyword">] = </span><span class="default">odbc_result</span><span class="keyword">(</span><span class="default">$result</span><span class="keyword">, </span><span class="default">$i</span><span class="keyword">);
<br />    }
<br />    </span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;
<br />} 
<br /></span><span class="default">?&gt;</span> 
<br />
<br />This should be pretty simple code to follow, you can address your variables at any time later using the column names from your table.  For now I am addressing them with their real values and using this simply to avoid having to type out all the variable names in the top of my code.  Have fun.
<br />
<br />Jason/ArtHacker.com</span></code></div>
  </div>
 </div>
  <div class="note" id="14450">  <div class="votes">
    <div id="Vu14450">
    <a href="/manual/vote-note.php?id=14450&amp;page=function.odbc-field-name&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd14450">
    <a href="/manual/vote-note.php?id=14450&amp;page=function.odbc-field-name&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V14450" title="0% like this...">
    -1
    </div>
  </div>
  <a href="#14450" class="name">
  <strong class="user"><em>curt at digmo dot com</em></strong></a><a class="genanchor" href="#14450"> &para;</a><div class="date" title="2001-07-31 06:58"><strong>24 years ago</strong></div>
  <div class="text" id="Hcom14450">
<div class="phpcode"><code><span class="html">I turned Jason's code into a function to roughly mimic the mysql_fetch_array function. I'm not a programmer and I've been messing with PHP less than a week, so I imagine there's a more efficient method that what I've come up with.
<br />
<br />
<br />function odbc_fetch_array($rownum, $res)
<br />{
<br />
<br />$i = 0; 
<br />$fCount = odbc_num_fields($res); 
<br />odbc_fetch_row($res, $rownum);
<br />    while ($i &lt; $fCount) 
<br />        { 
<br />    $i++; 
<br />    $fName = odbc_field_name($res, $i); 
<br />    $myrow[$fName] = odbc_result($res, $i);
<br />          }
<br />$i=0;
<br />return $myrow;
<br />}</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.odbc-field-name&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.odbc-field-name.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.uodbc.php">ODBC Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.odbc-autocommit.php" title="odbc_&#8203;autocommit">odbc_&#8203;autocommit</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-binmode.php" title="odbc_&#8203;binmode">odbc_&#8203;binmode</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-close.php" title="odbc_&#8203;close">odbc_&#8203;close</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-close-all.php" title="odbc_&#8203;close_&#8203;all">odbc_&#8203;close_&#8203;all</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-columnprivileges.php" title="odbc_&#8203;columnprivileges">odbc_&#8203;columnprivileges</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-columns.php" title="odbc_&#8203;columns">odbc_&#8203;columns</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-commit.php" title="odbc_&#8203;commit">odbc_&#8203;commit</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-connect.php" title="odbc_&#8203;connect">odbc_&#8203;connect</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-connection-string-is-quoted.php" title="odbc_&#8203;connection_&#8203;string_&#8203;is_&#8203;quoted">odbc_&#8203;connection_&#8203;string_&#8203;is_&#8203;quoted</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-connection-string-quote.php" title="odbc_&#8203;connection_&#8203;string_&#8203;quote">odbc_&#8203;connection_&#8203;string_&#8203;quote</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-connection-string-should-quote.php" title="odbc_&#8203;connection_&#8203;string_&#8203;should_&#8203;quote">odbc_&#8203;connection_&#8203;string_&#8203;should_&#8203;quote</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-cursor.php" title="odbc_&#8203;cursor">odbc_&#8203;cursor</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-data-source.php" title="odbc_&#8203;data_&#8203;source">odbc_&#8203;data_&#8203;source</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-do.php" title="odbc_&#8203;do">odbc_&#8203;do</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-error.php" title="odbc_&#8203;error">odbc_&#8203;error</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-errormsg.php" title="odbc_&#8203;errormsg">odbc_&#8203;errormsg</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-exec.php" title="odbc_&#8203;exec">odbc_&#8203;exec</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-execute.php" title="odbc_&#8203;execute">odbc_&#8203;execute</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-fetch-array.php" title="odbc_&#8203;fetch_&#8203;array">odbc_&#8203;fetch_&#8203;array</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-fetch-into.php" title="odbc_&#8203;fetch_&#8203;into">odbc_&#8203;fetch_&#8203;into</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-fetch-object.php" title="odbc_&#8203;fetch_&#8203;object">odbc_&#8203;fetch_&#8203;object</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-fetch-row.php" title="odbc_&#8203;fetch_&#8203;row">odbc_&#8203;fetch_&#8203;row</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-field-len.php" title="odbc_&#8203;field_&#8203;len">odbc_&#8203;field_&#8203;len</a>
                        </li>
                                                <li class="current">
                            <a href="function.odbc-field-name.php" title="odbc_&#8203;field_&#8203;name">odbc_&#8203;field_&#8203;name</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-field-num.php" title="odbc_&#8203;field_&#8203;num">odbc_&#8203;field_&#8203;num</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-field-precision.php" title="odbc_&#8203;field_&#8203;precision">odbc_&#8203;field_&#8203;precision</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-field-scale.php" title="odbc_&#8203;field_&#8203;scale">odbc_&#8203;field_&#8203;scale</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-field-type.php" title="odbc_&#8203;field_&#8203;type">odbc_&#8203;field_&#8203;type</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-foreignkeys.php" title="odbc_&#8203;foreignkeys">odbc_&#8203;foreignkeys</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-free-result.php" title="odbc_&#8203;free_&#8203;result">odbc_&#8203;free_&#8203;result</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-gettypeinfo.php" title="odbc_&#8203;gettypeinfo">odbc_&#8203;gettypeinfo</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-longreadlen.php" title="odbc_&#8203;longreadlen">odbc_&#8203;longreadlen</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-next-result.php" title="odbc_&#8203;next_&#8203;result">odbc_&#8203;next_&#8203;result</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-num-fields.php" title="odbc_&#8203;num_&#8203;fields">odbc_&#8203;num_&#8203;fields</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-num-rows.php" title="odbc_&#8203;num_&#8203;rows">odbc_&#8203;num_&#8203;rows</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-pconnect.php" title="odbc_&#8203;pconnect">odbc_&#8203;pconnect</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-prepare.php" title="odbc_&#8203;prepare">odbc_&#8203;prepare</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-primarykeys.php" title="odbc_&#8203;primarykeys">odbc_&#8203;primarykeys</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-procedurecolumns.php" title="odbc_&#8203;procedurecolumns">odbc_&#8203;procedurecolumns</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-procedures.php" title="odbc_&#8203;procedures">odbc_&#8203;procedures</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-result.php" title="odbc_&#8203;result">odbc_&#8203;result</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-result-all.php" title="odbc_&#8203;result_&#8203;all">odbc_&#8203;result_&#8203;all</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-rollback.php" title="odbc_&#8203;rollback">odbc_&#8203;rollback</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-setoption.php" title="odbc_&#8203;setoption">odbc_&#8203;setoption</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-specialcolumns.php" title="odbc_&#8203;specialcolumns">odbc_&#8203;specialcolumns</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-statistics.php" title="odbc_&#8203;statistics">odbc_&#8203;statistics</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-tableprivileges.php" title="odbc_&#8203;tableprivileges">odbc_&#8203;tableprivileges</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-tables.php" title="odbc_&#8203;tables">odbc_&#8203;tables</a>
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
