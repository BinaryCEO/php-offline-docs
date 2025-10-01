<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: session_write_close - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.session-write-close.php">
 <link rel="shorturl" href="https://www.php.net/session-write-close">
 <link rel="alternate" href="https://www.php.net/session-write-close" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.session.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.session-unset.php">
 <link rel="next" href="https://www.php.net/manual/en/class.sessionhandler.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.session-write-close.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.session-write-close.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.session-write-close.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.session-write-close.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.session-write-close.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.session-write-close.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.session-write-close.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.session-write-close.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.session-write-close.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.session-write-close.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.session-write-close.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Write session data and end session" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: session_write_close - Manual" />
<meta name="twitter:description" content="Write session data and end session" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: session_write_close - Manual" />
<meta itemprop="description" content="Write session data and end session" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Write session data and end session" />

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
        <a href="class.sessionhandler.php">
          SessionHandler &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.session-unset.php">
          &laquo; session_unset        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.session.php'>Session Extensions</a></li>      <li><a href='book.session.php'>Sessions</a></li>      <li><a href='ref.session.php'>Session Functions</a></li>      </ul>
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
            <option value='en/function.session-write-close.php' selected="selected">English</option>
            <option value='de/function.session-write-close.php'>German</option>
            <option value='es/function.session-write-close.php'>Spanish</option>
            <option value='fr/function.session-write-close.php'>French</option>
            <option value='it/function.session-write-close.php'>Italian</option>
            <option value='ja/function.session-write-close.php'>Japanese</option>
            <option value='pt_BR/function.session-write-close.php'>Brazilian Portuguese</option>
            <option value='ru/function.session-write-close.php'>Russian</option>
            <option value='tr/function.session-write-close.php'>Turkish</option>
            <option value='uk/function.session-write-close.php'>Ukrainian</option>
            <option value='zh/function.session-write-close.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.session-write-close" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">session_write_close</h1>
  <p class="verinfo">(PHP 4 &gt;= 4.0.4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">session_write_close</span> &mdash; <span class="dc-title">Write session data and end session</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.session-write-close-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>session_write_close</strong></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">
   End the current session and store session data.
  </p>
  <p class="para">
   Session data is usually stored after your script terminated without the
   need to call <span class="function"><strong>session_write_close()</strong></span>, but as session data
   is locked to prevent concurrent writes only one script may operate on a
   session at any time. When using framesets together with sessions you will
   experience the frames loading one by one due to this locking. You can
   reduce the time needed to load all the frames by ending the session as
   soon as all changes to session variables are done.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.session-write-close-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">This function has no parameters.</p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.session-write-close-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> on success or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.session-write-close-changelog">
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
      <td>7.2.0</td>
      <td>
       The return type of this function is <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> now.
       Formerly, it has been <span class="type"><span class="type"><a href="language.types.void.php" class="type void">void</a></span></span>.
      </td>
     </tr>

    </tbody>
   
  </table>

 </div>


 <div class="refsect1 seealso" id="refsect1-function.session-write-close-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li>
     The <span class="function"><a href="function.session-register-shutdown.php" class="function" rel="rdfs-seeAlso">session_register_shutdown()</a> - Session shutdown function</span>
    </li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/session/functions/session-write-close.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.session-write-close%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.session-write-close&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.session-write-close.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">13 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="96982">  <div class="votes">
    <div id="Vu96982">
    <a href="/manual/vote-note.php?id=96982&amp;page=function.session-write-close&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd96982">
    <a href="/manual/vote-note.php?id=96982&amp;page=function.session-write-close&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V96982" title="71% like this...">
    88
    </div>
  </div>
  <a href="#96982" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#96982"> &para;</a><div class="date" title="2010-03-25 11:44"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom96982">
<div class="phpcode"><code><span class="html">You can have interesting fun debugging anything with sleep() in it if you have a session still active.  For example, a page that makes an ajax request, where the ajax request polls a server-side event (and may not return immediately).<br /><br />If the ajax function doesn't do session_write_close(), then your outer page will appear to hang, and opening other pages in new tabs will also stall.</span></code></div>
  </div>
 </div>
  <div class="note" id="112681">  <div class="votes">
    <div id="Vu112681">
    <a href="/manual/vote-note.php?id=112681&amp;page=function.session-write-close&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd112681">
    <a href="/manual/vote-note.php?id=112681&amp;page=function.session-write-close&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V112681" title="68% like this...">
    34
    </div>
  </div>
  <a href="#112681" class="name">
  <strong class="user"><em>atul at jreply dot com</em></strong></a><a class="genanchor" href="#112681"> &para;</a><div class="date" title="2013-07-12 07:45"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom112681">
<div class="phpcode"><code><span class="html">An easy gotcha here - the $_SESSIONS superglobal does not vanish because you call session_write_close.  If subsequent to the write_close call if you manipulate the superglobal the changes will not be saved when the script exists.  Likewise a call to session_regenrate_id will fail.<br /><br />Closing the session and then manipulating session variables is not something many would do by intent.  However, if your sessions suddenly start misbehaving, failing to record changes etc it is well worth checking that the cause is not this one!</span></code></div>
  </div>
 </div>
  <div class="note" id="120452">  <div class="votes">
    <div id="Vu120452">
    <a href="/manual/vote-note.php?id=120452&amp;page=function.session-write-close&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120452">
    <a href="/manual/vote-note.php?id=120452&amp;page=function.session-write-close&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120452" title="69% like this...">
    13
    </div>
  </div>
  <a href="#120452" class="name">
  <strong class="user"><em>sascha at archinform dot de</em></strong></a><a class="genanchor" href="#120452"> &para;</a><div class="date" title="2017-01-11 04:00"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120452">
<div class="phpcode"><code><span class="html">If You apply session_write_close() to allow concurrent requests from a client (for example simultaneous AJAX calls) this may not resolve the problem, if You have enabled output buffering (default in PHP 7+). You have to set output_buffering = Off in php.ini, otherwise session won't be closed immediately.</span></code></div>
  </div>
 </div>
  <div class="note" id="122035">  <div class="votes">
    <div id="Vu122035">
    <a href="/manual/vote-note.php?id=122035&amp;page=function.session-write-close&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122035">
    <a href="/manual/vote-note.php?id=122035&amp;page=function.session-write-close&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122035" title="62% like this...">
    7
    </div>
  </div>
  <a href="#122035" class="name">
  <strong class="user"><em>jcastromail at yahoo dot es</em></strong></a><a class="genanchor" href="#122035"> &para;</a><div class="date" title="2017-12-17 12:26"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122035">
<div class="phpcode"><code><span class="html">Why this function is highly important?  I explain.<br /><br />In a nutshell, how session works:<br />Client side: php is sending back to the client, a cookie with the id of the session. So, the session ends when the server ends to process the script and not when session_write_close() is executed. So, using session_write_close() for fast saving the session in the client side is useless unless you are ob_flush() and flush() to the customer.<br /><br />Server side: It could be changed but the normal behavior is to save the session information in a file.  For example:<br /><br />sess_b2dbfc9ddd789d66da84bf57a62e2000  file<br /><br />**This file is usually locked**, so if two sessions are trying open at the same time, then one is freezed until the file is unlocked. session_write_close() ends the lock.<br /><br />For example:<br /><span class="default">&lt;?php<br />$t1</span><span class="keyword">=</span><span class="default">microtime</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">);<br /></span><span class="default">session_start</span><span class="keyword">();<br /></span><span class="default">sleep</span><span class="keyword">(</span><span class="default">3</span><span class="keyword">);<br /></span><span class="default">session_write_close</span><span class="keyword">();<br /></span><span class="default">$t2</span><span class="keyword">=</span><span class="default">microtime</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">);<br />echo </span><span class="default">$t2</span><span class="keyword">-</span><span class="default">$t1</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span><br />If we run this code in two processes (using the same session, such as two tabs), then one will return 3 seconds while the other will return 6 seconds.<br /><br />Its caused because the first process lock the session file.<br /><br />However, changing to:<br /><span class="default">&lt;?php<br />$t1</span><span class="keyword">=</span><span class="default">microtime</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">);<br /></span><span class="default">session_start</span><span class="keyword">();<br /></span><span class="default">session_write_close</span><span class="keyword">();<br /></span><span class="default">sleep</span><span class="keyword">(</span><span class="default">3</span><span class="keyword">);<br /></span><span class="default">$t2</span><span class="keyword">=</span><span class="default">microtime</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">);<br />echo </span><span class="default">$t2</span><span class="keyword">-</span><span class="default">$t1</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span>both files runs at 3 seconds.<br /><br />For PHP 7.0 and higher, we could use session_start(true); for auto close after the first read.<br /><br />This operation is highly important for AJAX when we used to do many operations in parallel by using the the same session</span></code></div>
  </div>
 </div>
  <div class="note" id="63970">  <div class="votes">
    <div id="Vu63970">
    <a href="/manual/vote-note.php?id=63970&amp;page=function.session-write-close&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd63970">
    <a href="/manual/vote-note.php?id=63970&amp;page=function.session-write-close&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V63970" title="61% like this...">
    12
    </div>
  </div>
  <a href="#63970" class="name">
  <strong class="user"><em>risaac at deadletter dot com</em></strong></a><a class="genanchor" href="#63970"> &para;</a><div class="date" title="2006-04-04 12:46"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom63970">
<div class="phpcode"><code><span class="html">Workaround if session_write_close() still doesn't write sessions fast enough:<br /><br />I found with one PHP login system that even session_write_close() was not setting the session variables before I transferred pages with a Location: header.  So the user would log in, I would create the $_SESSION variables, call session_write_close() and then transfer to the secure page using header(Location:...).  The secure page would check for the session vars, not find them, and force the user to log in again.  After the second login the session would be found and they could continue.<br /><br />My workaround was to create the $_SESSION variables with 0 values before writing the initial login page.  Then I updated the session vars with the login results and used the header() function to switch to the secure location.  Once the session vars have already been created, updated values are assigned quickly.  Problem solved.  Just be sure the secure page checks both that the $_SESSION var exists AND that it's not 0.</span></code></div>
  </div>
 </div>
  <div class="note" id="93470">  <div class="votes">
    <div id="Vu93470">
    <a href="/manual/vote-note.php?id=93470&amp;page=function.session-write-close&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd93470">
    <a href="/manual/vote-note.php?id=93470&amp;page=function.session-write-close&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V93470" title="60% like this...">
    10
    </div>
  </div>
  <a href="#93470" class="name">
  <strong class="user"><em>web at murray-mint dot co dot uk</em></strong></a><a class="genanchor" href="#93470"> &para;</a><div class="date" title="2009-09-11 05:36"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom93470">
<div class="phpcode"><code><span class="html">If you're saving data to a session but finding it's not actually being saved, check and ensure that you're not assigning any arrays with a key containing the pipe character (|). This will prevent the session data from being serialized and saved.</span></code></div>
  </div>
 </div>
  <div class="note" id="106055">  <div class="votes">
    <div id="Vu106055">
    <a href="/manual/vote-note.php?id=106055&amp;page=function.session-write-close&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd106055">
    <a href="/manual/vote-note.php?id=106055&amp;page=function.session-write-close&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V106055" title="60% like this...">
    5
    </div>
  </div>
  <a href="#106055" class="name">
  <strong class="user"><em>sss at activators dot info</em></strong></a><a class="genanchor" href="#106055"> &para;</a><div class="date" title="2011-10-06 01:55"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom106055">
<div class="phpcode"><code><span class="html">i have been using a mysql database custom session handler (not using cookies) and was having problems getting the session data to be saved consistantly on my database driven website<br /><br />clients also have to navigate across domains for website management at times so i have some special code to make all this happen relatively seamlessly and to ensure that each person's data is secure.<br /><br />i added session_write_close() at the very end of the last script that set session data and solved the problem.<br /><br />i am not sure why, but it seems the calls to write and close were not always being made (i was not smart enough to figure it out)<br /><br />now that the session_write_close() call is being made, my problems seemed to have disappeared - hopefully for good.<br /><br />hope this helps someone.</span></code></div>
  </div>
 </div>
  <div class="note" id="125225">  <div class="votes">
    <div id="Vu125225">
    <a href="/manual/vote-note.php?id=125225&amp;page=function.session-write-close&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125225">
    <a href="/manual/vote-note.php?id=125225&amp;page=function.session-write-close&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125225" title="50% like this...">
    0
    </div>
  </div>
  <a href="#125225" class="name">
  <strong class="user"><em>atesin &gt; gmail</em></strong></a><a class="genanchor" href="#125225"> &para;</a><div class="date" title="2020-07-29 12:03"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom125225">
<div class="phpcode"><code><span class="html">i had trouble with 2 concurrent scripts, a login form with a php generated captcha... the latter truncated the session (session file length 0) so the login always failed due token or captcha error... i thought that was a session blocking problem, but was not<br /><br />  <span class="default">&lt;?php </span><span class="comment">// pseudo code<br />  <br />  </span><span class="keyword">@</span><span class="default">session_start</span><span class="keyword">();<br />  </span><span class="default">$_SESSION</span><span class="keyword">[</span><span class="string">'token'</span><span class="keyword">] = </span><span class="default">$token </span><span class="keyword">= </span><span class="default">random_string</span><span class="keyword">();<br />  </span><span class="default">session_write_close</span><span class="keyword">();<br />  <br />  </span><span class="default">?&gt;</span>&lt;pseudo html&gt;<br />  &lt;form&gt;<br />    &lt;hidden $token/&gt;<br />    Name : &lt;input name/&gt;<br />    Pass : &lt;input pass/&gt;<br />    Captcha &lt;img captcha.php/&gt; : &lt;input captcha/&gt;<br />    &lt;submit/&gt;<br />  &lt;/form&gt;<br />  &lt;/html&gt;<br /><br />  <span class="default">&lt;?php </span><span class="comment">// captcha.php pseudo code<br /><br />  </span><span class="default">$code </span><span class="keyword">= </span><span class="default">random_string</span><span class="keyword">();<br />  if ( </span><span class="default">request_valid</span><span class="keyword">() )<br />  {<br />    @</span><span class="default">session_start</span><span class="keyword">();<br />    </span><span class="default">$_SESSION</span><span class="keyword">[</span><span class="string">'captcha|'</span><span class="keyword">.</span><span class="default">$HTTP_REFERER</span><span class="keyword">] = </span><span class="default">$code</span><span class="keyword">;<br />    </span><span class="default">session_write_close</span><span class="keyword">();<br />  }<br />  </span><span class="default">$img </span><span class="keyword">= </span><span class="default">text_to_img</span><span class="keyword">(</span><span class="default">$code</span><span class="keyword">);<br />  </span><span class="default">send_img</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">);<br />  <br />  </span><span class="default">?&gt;<br /></span><br />i choose pipeline as separator in line $_SESSION['captcha|'.$HTTP_REFERER] = $code; because being forbidden in urls "&lt;&gt;[\]^`{|}space <br /><br />but seems pipeline produced serialization errors on session file, so changing to another inocuous character (underscode in my case) solved the problem... try to avoid reserved serialization characters |:{}";</span></code></div>
  </div>
 </div>
  <div class="note" id="86015">  <div class="votes">
    <div id="Vu86015">
    <a href="/manual/vote-note.php?id=86015&amp;page=function.session-write-close&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd86015">
    <a href="/manual/vote-note.php?id=86015&amp;page=function.session-write-close&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V86015" title="51% like this...">
    1
    </div>
  </div>
  <a href="#86015" class="name">
  <strong class="user"><em>ivan at alexandrov dot biz</em></strong></a><a class="genanchor" href="#86015"> &para;</a><div class="date" title="2008-09-29 07:14"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom86015">
<div class="phpcode"><code><span class="html">I had a problem with realizing the restore password form. First a user entered his login or e-mail in the system.<br /><br />Then the script searched the database, got the session data, and sended link with SID to registered e-mail. The link was configured so, that it restored session data and logged user in the secure interface to the change password form.<br /><br />Then was displayed a page with the message about sended message.<br /><br />The problem was that ID was not unique in three pages, the SID sended to e-mail anyone could see in cookie.<br /><br />I tryed to start new session before generating and after sending link with the code:<br /><br /><span class="default">&lt;?php </span><span class="keyword">....<br /></span><span class="default">session_start</span><span class="keyword">();<br /></span><span class="comment">/*Getting user login and e-mail from database*/<br /></span><span class="default">$user_login </span><span class="keyword">= </span><span class="string">"...."</span><span class="keyword">;<br /></span><span class="default">$user_id </span><span class="keyword">= </span><span class="string">"....."<br /><br /></span><span class="comment">/*CLOSE PREVIOUS SESSION*/<br /></span><span class="default">session_unlink</span><span class="keyword">();<br /></span><span class="default">session_destroy</span><span class="keyword">();<br /><br /></span><span class="comment">/*NOW GENERATING LINK FOR SESSION DATA */<br /></span><span class="default">session_start</span><span class="keyword">();<br /></span><span class="default">$_SESSION </span><span class="keyword">= </span><span class="default">$user_login</span><span class="keyword">;<br /></span><span class="default">$_SESSION </span><span class="keyword">= </span><span class="default">$user_id</span><span class="keyword">;<br /></span><span class="comment">/*here generating link:*/<br /></span><span class="default">$link </span><span class="keyword">= </span><span class="string">"<a href="http://host.com/restore=" rel="nofollow" target="_blank">http://host.com/restore=</a>" </span><span class="keyword">. </span><span class="default">SID </span><span class="keyword">. </span><span class="string">""</span><span class="keyword">;<br /></span><span class="default">mail </span><span class="keyword">(....);<br /><br /></span><span class="comment">/*CLOSE THE SESSION WITH USER DATA*/<br /></span><span class="default">session_write_close</span><span class="keyword">();<br /><br /></span><span class="comment">/*AND STARTING A NEW SESSION*/<br /></span><span class="default">session_start</span><span class="keyword">();<br /></span><span class="comment">/*THEN LOAD THE 'MESSAGE SENDED' PAGE*/<br /></span><span class="default">header</span><span class="keyword">(</span><span class="string">"Location: /restore/message_sended/"</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;<br /></span><br />The trouble was that SID was the same even after session_unlink() and session_write_close(). The session_start() function just restored the previous session data!!! So the script was not safe. <br />Then I added session_regenerate_id() call after each session_start().<br /><br /><span class="default">&lt;?php </span><span class="keyword">....<br /></span><span class="default">session_start</span><span class="keyword">();<br /></span><span class="comment">/*Getting user login and e-mail from database*/<br /></span><span class="default">$user_login </span><span class="keyword">= </span><span class="string">"...."</span><span class="keyword">;<br /></span><span class="default">$user_id </span><span class="keyword">= </span><span class="string">"....."<br /><br /></span><span class="comment">/*CLOSE PREVIOUS SESSION*/<br /></span><span class="default">session_unlink</span><span class="keyword">();<br /></span><span class="default">session_destroy</span><span class="keyword">();<br /><br /></span><span class="comment">/*NOW GENERATING LINK FOR SESSION DATA */<br /></span><span class="default">session_start</span><span class="keyword">();<br /></span><span class="default">session_regenerate_id</span><span class="keyword">();</span><span class="comment">//Regenerating SID for sending<br /><br /></span><span class="default">$_SESSION </span><span class="keyword">= </span><span class="default">$user_login</span><span class="keyword">;<br /></span><span class="default">$_SESSION </span><span class="keyword">= </span><span class="default">$user_id</span><span class="keyword">;<br /><br /></span><span class="comment">/*here generating link:*/<br /></span><span class="default">$link </span><span class="keyword">= </span><span class="string">"<a href="http://host.com/restore=" rel="nofollow" target="_blank">http://host.com/restore=</a>" </span><span class="keyword">. </span><span class="default">SID </span><span class="keyword">. </span><span class="string">""</span><span class="keyword">;<br /></span><span class="default">mail </span><span class="keyword">(....);<br /><br /></span><span class="comment">/*CLOSE THE SESSION WITH USER DATA*/<br /></span><span class="default">session_write_close</span><span class="keyword">();<br /><br /></span><span class="comment">/*AND STARTING ANOTHER NEW SESSION*/<br /></span><span class="default">session_start</span><span class="keyword">();<br /></span><span class="default">session_regenerate_id</span><span class="keyword">(); </span><span class="comment">//Regenerating SID<br />/*THEN LOAD THE 'MESSAGE SENDED' PAGE*/<br /></span><span class="default">header</span><span class="keyword">(</span><span class="string">"Location: /restore/message_sended/"</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;<br /></span><br /> And now it works as needed! The SID sending to user we cannot see in cookies nor before neither after generated link, but the data is saved in session with this id. So only the owner of account can get it!</span></code></div>
  </div>
 </div>
  <div class="note" id="52861">  <div class="votes">
    <div id="Vu52861">
    <a href="/manual/vote-note.php?id=52861&amp;page=function.session-write-close&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd52861">
    <a href="/manual/vote-note.php?id=52861&amp;page=function.session-write-close&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V52861" title="52% like this...">
    1
    </div>
  </div>
  <a href="#52861" class="name">
  <strong class="user"><em>editorial at literati dot ca</em></strong></a><a class="genanchor" href="#52861"> &para;</a><div class="date" title="2005-05-15 01:13"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom52861">
<div class="phpcode"><code><span class="html">Further to the comment by nakanishi at mailstyle dot com, it appears that calling session_write_close() followed by session_start() causes issues if you have more than one browser window/tab open in the session, and have a large session data array.  I have an intermitent (and hard to replicate reliably) issue with session_start() never being called or not returning - the script hangs before the session headers are written.  I'm puting this down to trying to be too clever rather than to a bug per se.</span></code></div>
  </div>
 </div>
  <div class="note" id="94818">  <div class="votes">
    <div id="Vu94818">
    <a href="/manual/vote-note.php?id=94818&amp;page=function.session-write-close&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd94818">
    <a href="/manual/vote-note.php?id=94818&amp;page=function.session-write-close&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V94818" title="50% like this...">
    0
    </div>
  </div>
  <a href="#94818" class="name">
  <strong class="user"><em>prophp at gmail dot com</em></strong></a><a class="genanchor" href="#94818"> &para;</a><div class="date" title="2009-11-26 06:21"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom94818">
<div class="phpcode"><code><span class="html">Beware, if you overwrite the default PHP Session handling and use debugging code inside the write() function, the debugging code is not executed until you run session_write_close().<br /><br />I tried everything, file logging directly from the write() function, global debugging variable increments, static class properties. The only things written were the session open() and read() calls. My debugging code looks like this:<br /><span class="default">&lt;?php<br />$Session </span><span class="keyword">= new </span><span class="default">Session</span><span class="keyword">();<br />...<br />class </span><span class="default">Session</span><span class="keyword">() {<br />    public function </span><span class="default">write</span><span class="keyword">(</span><span class="default">$id</span><span class="keyword">)<br />        </span><span class="default">$sql </span><span class="keyword">= </span><span class="string">"UPDATE ... WHERE id="</span><span class="keyword">. </span><span class="default">mysql_real_escape_string</span><span class="keyword">(</span><span class="default">$id</span><span class="keyword">);<br />        </span><span class="default">self</span><span class="keyword">::</span><span class="default">$debug_Info </span><span class="keyword">.= </span><span class="string">"session_write sql=</span><span class="default">$sql</span><span class="string">"</span><span class="keyword">;<br />    ...<br />}<br /><br /></span><span class="comment"># then at the very end of the script:<br /># session debugging<br /></span><span class="default">session_write_close</span><span class="keyword">(); <br /></span><span class="default">error_log</span><span class="keyword">(</span><span class="default">$Session</span><span class="keyword">-&gt;</span><span class="default">getDebugInfo</span><span class="keyword">(), </span><span class="default">3</span><span class="keyword">, </span><span class="string">'logs/sessions.log'</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />where getDebugInfo simply returns self::$debug_Info. Without session_write_close() the sessions.log would only contain the open() and read() calls.<br /><br />Maybe intuitive to many, it took days to realize. hope it helps!</span></code></div>
  </div>
 </div>
  <div class="note" id="121670">  <div class="votes">
    <div id="Vu121670">
    <a href="/manual/vote-note.php?id=121670&amp;page=function.session-write-close&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121670">
    <a href="/manual/vote-note.php?id=121670&amp;page=function.session-write-close&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121670" title="46% like this...">
    -1
    </div>
  </div>
  <a href="#121670" class="name">
  <strong class="user"><em>twicejr</em></strong></a><a class="genanchor" href="#121670"> &para;</a><div class="date" title="2017-09-21 07:31"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121670">
<div class="phpcode"><code><span class="html">You can easily make a cool chatbox without using frames and subdomains in combination with SSE (server side events), using for example a 'while(true){sleep($x)}' loop..<br /><br />Using session_write_close() prevents the session being locked (because the request 'never' ends (maybe after a minute or two.. but otherwise the page would hang).<br /><br />So you can make a chatbox without shell access on shared hosting, you just need to make a 'output all clients the new messages' function for the SSE stream and code a few lines of javascript. Read up on SSE.<br /><br />Obviously need a good caching or fast database with a lot of clients, because everyone will spawn a new stream connection. (in contrast to push mechanisms which will require at least a cron job on shared hosting).<br /><br />Cheap chatbox.</span></code></div>
  </div>
 </div>
  <div class="note" id="60054">  <div class="votes">
    <div id="Vu60054">
    <a href="/manual/vote-note.php?id=60054&amp;page=function.session-write-close&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd60054">
    <a href="/manual/vote-note.php?id=60054&amp;page=function.session-write-close&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V60054" title="48% like this...">
    -1
    </div>
  </div>
  <a href="#60054" class="name">
  <strong class="user"><em>unspammable-iain at iaindooley dot com</em></strong></a><a class="genanchor" href="#60054"> &para;</a><div class="date" title="2005-12-23 09:57"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom60054">
<div class="phpcode"><code><span class="html">As we all know, if an object is serialised, then the class definition must be included _before_ it is unserialised.<br /><br />My framework has an enormous number of class files, and including them all at the beginning of the script was really taking it's toll on my system (memory and execution time) so I switched to including required classes at the top of each class file that used them using require_once.<br /><br />This caused problems because I start my session at the very beginning of my script's execution, but all my class files aren't there at the beginning!!<br /><br />So no in my special 'require' function, I do the following:<br /><br />if(!class_exists($to_require))<br />{<br />    session_write_close();<br />    require_once('path/to/classes/'.$to_require.'.php');<br />    session_start();<br />}<br /><br />This is a considerably smaller performance hit that including every class that the application uses at the very beginning of the application.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.session-write-close&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.session-write-close.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.session.php">Session Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.session-abort.php" title="session_&#8203;abort">session_&#8203;abort</a>
                        </li>
                                                <li class="">
                            <a href="function.session-cache-expire.php" title="session_&#8203;cache_&#8203;expire">session_&#8203;cache_&#8203;expire</a>
                        </li>
                                                <li class="">
                            <a href="function.session-cache-limiter.php" title="session_&#8203;cache_&#8203;limiter">session_&#8203;cache_&#8203;limiter</a>
                        </li>
                                                <li class="">
                            <a href="function.session-commit.php" title="session_&#8203;commit">session_&#8203;commit</a>
                        </li>
                                                <li class="">
                            <a href="function.session-create-id.php" title="session_&#8203;create_&#8203;id">session_&#8203;create_&#8203;id</a>
                        </li>
                                                <li class="">
                            <a href="function.session-decode.php" title="session_&#8203;decode">session_&#8203;decode</a>
                        </li>
                                                <li class="">
                            <a href="function.session-destroy.php" title="session_&#8203;destroy">session_&#8203;destroy</a>
                        </li>
                                                <li class="">
                            <a href="function.session-encode.php" title="session_&#8203;encode">session_&#8203;encode</a>
                        </li>
                                                <li class="">
                            <a href="function.session-gc.php" title="session_&#8203;gc">session_&#8203;gc</a>
                        </li>
                                                <li class="">
                            <a href="function.session-get-cookie-params.php" title="session_&#8203;get_&#8203;cookie_&#8203;params">session_&#8203;get_&#8203;cookie_&#8203;params</a>
                        </li>
                                                <li class="">
                            <a href="function.session-id.php" title="session_&#8203;id">session_&#8203;id</a>
                        </li>
                                                <li class="">
                            <a href="function.session-module-name.php" title="session_&#8203;module_&#8203;name">session_&#8203;module_&#8203;name</a>
                        </li>
                                                <li class="">
                            <a href="function.session-name.php" title="session_&#8203;name">session_&#8203;name</a>
                        </li>
                                                <li class="">
                            <a href="function.session-regenerate-id.php" title="session_&#8203;regenerate_&#8203;id">session_&#8203;regenerate_&#8203;id</a>
                        </li>
                                                <li class="">
                            <a href="function.session-register-shutdown.php" title="session_&#8203;register_&#8203;shutdown">session_&#8203;register_&#8203;shutdown</a>
                        </li>
                                                <li class="">
                            <a href="function.session-reset.php" title="session_&#8203;reset">session_&#8203;reset</a>
                        </li>
                                                <li class="">
                            <a href="function.session-save-path.php" title="session_&#8203;save_&#8203;path">session_&#8203;save_&#8203;path</a>
                        </li>
                                                <li class="">
                            <a href="function.session-set-cookie-params.php" title="session_&#8203;set_&#8203;cookie_&#8203;params">session_&#8203;set_&#8203;cookie_&#8203;params</a>
                        </li>
                                                <li class="">
                            <a href="function.session-set-save-handler.php" title="session_&#8203;set_&#8203;save_&#8203;handler">session_&#8203;set_&#8203;save_&#8203;handler</a>
                        </li>
                                                <li class="">
                            <a href="function.session-start.php" title="session_&#8203;start">session_&#8203;start</a>
                        </li>
                                                <li class="">
                            <a href="function.session-status.php" title="session_&#8203;status">session_&#8203;status</a>
                        </li>
                                                <li class="">
                            <a href="function.session-unset.php" title="session_&#8203;unset">session_&#8203;unset</a>
                        </li>
                                                <li class="current">
                            <a href="function.session-write-close.php" title="session_&#8203;write_&#8203;close">session_&#8203;write_&#8203;close</a>
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
