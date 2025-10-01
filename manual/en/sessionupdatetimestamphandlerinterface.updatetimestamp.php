<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: SessionUpdateTimestampHandlerInterface::updateTimestamp - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/sessionupdatetimestamphandlerinterface.updatetimestamp.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/sessionupdatetimestamphandlerinterface.updatetimestamp.php">
 <link rel="alternate" href="https://www.php.net/manual/en/sessionupdatetimestamphandlerinterface.updatetimestamp.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/class.sessionupdatetimestamphandlerinterface.php">
 <link rel="prev" href="https://www.php.net/manual/en/class.sessionupdatetimestamphandlerinterface.php">
 <link rel="next" href="https://www.php.net/manual/en/sessionupdatetimestamphandlerinterface.validateid.php">

 <link rel="alternate" href="https://www.php.net/manual/en/sessionupdatetimestamphandlerinterface.updatetimestamp.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/sessionupdatetimestamphandlerinterface.updatetimestamp.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/sessionupdatetimestamphandlerinterface.updatetimestamp.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/sessionupdatetimestamphandlerinterface.updatetimestamp.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/sessionupdatetimestamphandlerinterface.updatetimestamp.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/sessionupdatetimestamphandlerinterface.updatetimestamp.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/sessionupdatetimestamphandlerinterface.updatetimestamp.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/sessionupdatetimestamphandlerinterface.updatetimestamp.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/sessionupdatetimestamphandlerinterface.updatetimestamp.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/sessionupdatetimestamphandlerinterface.updatetimestamp.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/sessionupdatetimestamphandlerinterface.updatetimestamp.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Update timestamp" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: SessionUpdateTimestampHandlerInterface::updateTimestamp - Manual" />
<meta name="twitter:description" content="Update timestamp" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: SessionUpdateTimestampHandlerInterface::updateTimestamp - Manual" />
<meta itemprop="description" content="Update timestamp" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Update timestamp" />

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
        <a href="sessionupdatetimestamphandlerinterface.validateid.php">
          SessionUpdateTimestampHandlerInterface::validateId &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="class.sessionupdatetimestamphandlerinterface.php">
          &laquo; SessionUpdateTimestampHandlerInterface        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.session.php'>Session Extensions</a></li>      <li><a href='book.session.php'>Sessions</a></li>      <li><a href='class.sessionupdatetimestamphandlerinterface.php'>SessionUpdateTimestampHandlerInterface</a></li>      </ul>
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
            <option value='en/sessionupdatetimestamphandlerinterface.updatetimestamp.php' selected="selected">English</option>
            <option value='de/sessionupdatetimestamphandlerinterface.updatetimestamp.php'>German</option>
            <option value='es/sessionupdatetimestamphandlerinterface.updatetimestamp.php'>Spanish</option>
            <option value='fr/sessionupdatetimestamphandlerinterface.updatetimestamp.php'>French</option>
            <option value='it/sessionupdatetimestamphandlerinterface.updatetimestamp.php'>Italian</option>
            <option value='ja/sessionupdatetimestamphandlerinterface.updatetimestamp.php'>Japanese</option>
            <option value='pt_BR/sessionupdatetimestamphandlerinterface.updatetimestamp.php'>Brazilian Portuguese</option>
            <option value='ru/sessionupdatetimestamphandlerinterface.updatetimestamp.php'>Russian</option>
            <option value='tr/sessionupdatetimestamphandlerinterface.updatetimestamp.php'>Turkish</option>
            <option value='uk/sessionupdatetimestamphandlerinterface.updatetimestamp.php'>Ukrainian</option>
            <option value='zh/sessionupdatetimestamphandlerinterface.updatetimestamp.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="sessionupdatetimestamphandlerinterface.updatetimestamp" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">SessionUpdateTimestampHandlerInterface::updateTimestamp</h1>
  <p class="verinfo">(PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">SessionUpdateTimestampHandlerInterface::updateTimestamp</span> &mdash; <span class="dc-title">Update timestamp</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-sessionupdatetimestamphandlerinterface.updatetimestamp-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><strong>SessionUpdateTimestampHandlerInterface::updateTimestamp</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$id</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$data</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">
   Updates the last modification timestamp of the session.
   This function is automatically executed when a session is updated.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-sessionupdatetimestamphandlerinterface.updatetimestamp-parameters">
  <h3 class="title">Parameters</h3>
  <dl>
   
    <dt><code class="parameter">id</code></dt>
    <dd>
     <p class="para">
      The session ID.
     </p>
    </dd>
   
   
    <dt><code class="parameter">data</code></dt>
    <dd>
     <p class="para">
      The session data.
     </p>
    </dd>
   
  </dl>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-sessionupdatetimestamphandlerinterface.updatetimestamp-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> if the timestamp was updated, <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> otherwise.
   Note that this value is returned internally to PHP for processing.
  </p>
 </div>


</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/session/sessionupdatetimestamphandlerinterface/updatetimestamp.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fsessionupdatetimestamphandlerinterface.updatetimestamp%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=sessionupdatetimestamphandlerinterface.updatetimestamp&amp;repo=en&amp;redirect=https://www.php.net/manual/en/sessionupdatetimestamphandlerinterface.updatetimestamp.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">5 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="128099">  <div class="votes">
    <div id="Vu128099">
    <a href="/manual/vote-note.php?id=128099&amp;page=sessionupdatetimestamphandlerinterface.updatetimestamp&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd128099">
    <a href="/manual/vote-note.php?id=128099&amp;page=sessionupdatetimestamphandlerinterface.updatetimestamp&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V128099" title="83% like this...">
    8
    </div>
  </div>
  <a href="#128099" class="name">
  <strong class="user"><em>tuncdan dot ozdemir dot peng at gmail dot com</em></strong></a><a class="genanchor" href="#128099"> &para;</a><div class="date" title="2023-01-08 06:26"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom128099">
<div class="phpcode"><code><span class="html">I am not sure why the data is needed for this method if it only updated the timestamp only.  Otherwise wouldn't his be the same the 'write' method? I think it is confusing and the manual unfortunately doesn't give much information about the whole session mechanics.</span></code></div>
  </div>
 </div>
  <div class="note" id="125060">  <div class="votes">
    <div id="Vu125060">
    <a href="/manual/vote-note.php?id=125060&amp;page=sessionupdatetimestamphandlerinterface.updatetimestamp&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125060">
    <a href="/manual/vote-note.php?id=125060&amp;page=sessionupdatetimestamphandlerinterface.updatetimestamp&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125060" title="70% like this...">
    4
    </div>
  </div>
  <a href="#125060" class="name">
  <strong class="user"><em>ohcc at 163 dot com</em></strong></a><a class="genanchor" href="#125060"> &para;</a><div class="date" title="2020-05-31 04:24"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom125060">
<div class="phpcode"><code><span class="html">When session.lazy_write is enabled, which is the default behaviour, session data will NOT be UPDATED if it remains unchanged, in this way the WRITE method of the session handler will not be called at all.<br /><br />If your session handler storages session data into files, UpdateTimestamp is used to update the "last modified time" of the session file, if your session handler storages session data into a database, UpdateTimestamp is used to update the table field that storages the last modified time of the session registry.</span></code></div>
  </div>
 </div>
  <div class="note" id="130253">  <div class="votes">
    <div id="Vu130253">
    <a href="/manual/vote-note.php?id=130253&amp;page=sessionupdatetimestamphandlerinterface.updatetimestamp&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd130253">
    <a href="/manual/vote-note.php?id=130253&amp;page=sessionupdatetimestamphandlerinterface.updatetimestamp&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V130253" title="no votes...">
    0
    </div>
  </div>
  <a href="#130253" class="name">
  <strong class="user"><em>guy dot sartorelli at silverstripe dot com</em></strong></a><a class="genanchor" href="#130253"> &para;</a><div class="date" title="2025-04-17 02:14"><strong>5 months ago</strong></div>
  <div class="text" id="Hcom130253">
<div class="phpcode"><code><span class="html">This is largely speculation based on what I can see in php-src - it appears that  the `$data` argument is included for two reasons:<br /><br />1. If you subclass `SessionHandler` and implement `SessionUpdateTimestampHandlerInterface`, your `updateTimestamp()` method may be called - but you can't call `parent::updateTimestamp()` because that method isn't implemented on `SessionHandler`. So instead you must call `parent::write()` which means you need the data to avoid overriding it with a blank session.<br />2. This simplifies the source code for PHP, since depending on whether there _is_ data and whether lazy `session.lazy_write` is enabled, either this method or `write()` will be called when the session is closed. Having the same arguments means only the name of the method being called has to change, not the arguments.<br /><br />The second reason feels a bit flakey so I don't trust my own reasoning there. But the first reason seems sound.</span></code></div>
  </div>
 </div>
  <div class="note" id="129814">  <div class="votes">
    <div id="Vu129814">
    <a href="/manual/vote-note.php?id=129814&amp;page=sessionupdatetimestamphandlerinterface.updatetimestamp&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129814">
    <a href="/manual/vote-note.php?id=129814&amp;page=sessionupdatetimestamphandlerinterface.updatetimestamp&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129814" title="0% like this...">
    -2
    </div>
  </div>
  <a href="#129814" class="name">
  <strong class="user"><em>polygon dot co dot in at gmail dot com</em></strong></a><a class="genanchor" href="#129814"> &para;</a><div class="date" title="2024-10-23 07:56"><strong>11 months ago</strong></div>
  <div class="text" id="Hcom129814">
<div class="phpcode"><code><span class="html">Example of using $sessionData available in updateTimestamp function.<br /><br />This is useful when we try to use cookie as a container to save session data.<br />In cookie we need to maintain the access timestamp on similar lines of access time of file.<br /><br />Here we have session.serialize_handler as php_serialize to use serialize() and unserialize() for session encoded data.<br /><br /><span class="default">&lt;?php<br />    </span><span class="keyword">public function </span><span class="default">updateTimestamp</span><span class="keyword">(</span><span class="default">$sessionId</span><span class="keyword">, </span><span class="default">$sessionData</span><span class="keyword">)<br />    {<br />        </span><span class="default">$sessionDataArr </span><span class="keyword">= </span><span class="default">unserialize</span><span class="keyword">(</span><span class="default">$sessionData</span><span class="keyword">);<br />        </span><span class="default">$sessionDataArr</span><span class="keyword">[</span><span class="string">'_TS_'</span><span class="keyword">] = </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">currentTimestamp</span><span class="keyword">;<br />        </span><span class="default">$sessionData </span><span class="keyword">= </span><span class="default">serialize</span><span class="keyword">(</span><span class="default">$sessionDataArr</span><span class="keyword">);<br /><br />        </span><span class="default">$cookieData </span><span class="keyword">= </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">encryptData</span><span class="keyword">(</span><span class="default">$sessionData</span><span class="keyword">);<br />        if (</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$cookieData</span><span class="keyword">) &gt; </span><span class="default">4096</span><span class="keyword">) {<br />            </span><span class="default">ob_end_clean</span><span class="keyword">();<br />            die(</span><span class="string">'Session data length exceeds max 4 kilobytes (KB) supported per Cookie'</span><span class="keyword">);<br />        }<br /><br />        return </span><span class="default">setcookie</span><span class="keyword">(<br />            </span><span class="default">$name </span><span class="keyword">= </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">sessionDataName</span><span class="keyword">,<br />            </span><span class="default">$value </span><span class="keyword">= </span><span class="default">$cookieData</span><span class="keyword">,<br />            </span><span class="default">$options </span><span class="keyword">= [<br />                </span><span class="string">'expires' </span><span class="keyword">=&gt; </span><span class="default">0</span><span class="keyword">,<br />                </span><span class="string">'path' </span><span class="keyword">=&gt; </span><span class="string">'/'</span><span class="keyword">,<br />                </span><span class="string">'domain' </span><span class="keyword">=&gt; </span><span class="string">''</span><span class="keyword">,<br />                </span><span class="string">'secure' </span><span class="keyword">=&gt; ((</span><span class="default">strpos</span><span class="keyword">(</span><span class="default">$_SERVER</span><span class="keyword">[</span><span class="string">'HTTP_HOST'</span><span class="keyword">], </span><span class="string">'localhost'</span><span class="keyword">) === </span><span class="default">false</span><span class="keyword">) ? </span><span class="default">true </span><span class="keyword">: </span><span class="default">false</span><span class="keyword">),<br />                </span><span class="string">'httponly' </span><span class="keyword">=&gt; </span><span class="default">true</span><span class="keyword">,<br />                </span><span class="string">'samesite' </span><span class="keyword">=&gt; </span><span class="string">'Lax'<br />            </span><span class="keyword">]<br />        );<br />    }<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="124842">  <div class="votes">
    <div id="Vu124842">
    <a href="/manual/vote-note.php?id=124842&amp;page=sessionupdatetimestamphandlerinterface.updatetimestamp&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124842">
    <a href="/manual/vote-note.php?id=124842&amp;page=sessionupdatetimestamphandlerinterface.updatetimestamp&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124842" title="42% like this...">
    -1
    </div>
  </div>
  <a href="#124842" class="name">
  <strong class="user"><em>ohcc at 163 dot com</em></strong></a><a class="genanchor" href="#124842"> &para;</a><div class="date" title="2020-03-23 10:26"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom124842">
<div class="phpcode"><code><span class="html">'validateId' is called after 'open' and before 'read' to validate the session id provided by the client, as 'open' -&gt; 'validateId' -&gt; 'read' -&gt; 'write' -&gt; 'close' are called in sequence.<br /><br />If 'validateId' returns false, a new session id will be generated, the session cookie will also be updated afterwards.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=sessionupdatetimestamphandlerinterface.updatetimestamp&amp;repo=en&amp;redirect=https://www.php.net/manual/en/sessionupdatetimestamphandlerinterface.updatetimestamp.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="class.sessionupdatetimestamphandlerinterface.php">SessionUpdateTimestampHandlerInterface</a>

                                    <ul class='child-menu-list'>

                                                <li class="current">
                            <a href="sessionupdatetimestamphandlerinterface.updatetimestamp.php" title="updateTimestamp">updateTimestamp</a>
                        </li>
                                                <li class="">
                            <a href="sessionupdatetimestamphandlerinterface.validateid.php" title="validateId">validateId</a>
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
