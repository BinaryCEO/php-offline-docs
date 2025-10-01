<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: apache_child_terminate - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.apache-child-terminate.php">
 <link rel="shorturl" href="https://www.php.net/apache-child-terminate">
 <link rel="alternate" href="https://www.php.net/apache-child-terminate" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.apache.php">
 <link rel="prev" href="https://www.php.net/manual/en/ref.apache.php">
 <link rel="next" href="https://www.php.net/manual/en/function.apache-get-modules.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.apache-child-terminate.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.apache-child-terminate.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.apache-child-terminate.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.apache-child-terminate.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.apache-child-terminate.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.apache-child-terminate.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.apache-child-terminate.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.apache-child-terminate.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.apache-child-terminate.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.apache-child-terminate.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.apache-child-terminate.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Terminate apache process after this request" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: apache_child_terminate - Manual" />
<meta name="twitter:description" content="Terminate apache process after this request" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: apache_child_terminate - Manual" />
<meta itemprop="description" content="Terminate apache process after this request" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Terminate apache process after this request" />

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
        <a href="function.apache-get-modules.php">
          apache_get_modules &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="ref.apache.php">
          &laquo; Apache Functions        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.utilspec.server.php'>Server Specific Extensions</a></li>      <li><a href='book.apache.php'>Apache</a></li>      <li><a href='ref.apache.php'>Apache Functions</a></li>      </ul>
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
            <option value='en/function.apache-child-terminate.php' selected="selected">English</option>
            <option value='de/function.apache-child-terminate.php'>German</option>
            <option value='es/function.apache-child-terminate.php'>Spanish</option>
            <option value='fr/function.apache-child-terminate.php'>French</option>
            <option value='it/function.apache-child-terminate.php'>Italian</option>
            <option value='ja/function.apache-child-terminate.php'>Japanese</option>
            <option value='pt_BR/function.apache-child-terminate.php'>Brazilian Portuguese</option>
            <option value='ru/function.apache-child-terminate.php'>Russian</option>
            <option value='tr/function.apache-child-terminate.php'>Turkish</option>
            <option value='uk/function.apache-child-terminate.php'>Ukrainian</option>
            <option value='zh/function.apache-child-terminate.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.apache-child-terminate" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">apache_child_terminate</h1>
  <p class="verinfo">(PHP 4 &gt;= 4.0.5, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">apache_child_terminate</span> &mdash; <span class="dc-title">Terminate apache process after this request</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-function.apache-child-terminate-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>apache_child_terminate</strong></span>(): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>

  <p class="para rdfs-comment">
   <span class="function"><strong>apache_child_terminate()</strong></span> will register the
   Apache process executing the current PHP request for termination
   once execution of PHP code is completed. It may be used to
   terminate a process after a script with high memory consumption has
   been run as memory will usually only be freed internally but not
   given back to the operating system. 
  </p>
  <p class="para">
   Works in the Apache, and FastCGI webservers.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.apache-child-terminate-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">This function has no parameters.</p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.apache-child-terminate-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   No value is returned.
  </p>
 </div>


 <div class="refsect1 notes" id="refsect1-function.apache-child-terminate-notes">
  <h3 class="title">Notes</h3>
  <blockquote class="note"><p><strong class="note">Note</strong>: <span class="simpara">This function is not
implemented on Windows platforms.</span></p></blockquote>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.apache-child-terminate-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.exit.php" class="function" rel="rdfs-seeAlso">exit()</a> - Terminate the current script with a status code or message</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/apache/functions/apache-child-terminate.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.apache-child-terminate%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.apache-child-terminate&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.apache-child-terminate.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">5 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="128040">  <div class="votes">
    <div id="Vu128040">
    <a href="/manual/vote-note.php?id=128040&amp;page=function.apache-child-terminate&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd128040">
    <a href="/manual/vote-note.php?id=128040&amp;page=function.apache-child-terminate&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V128040" title="50% like this...">
    0
    </div>
  </div>
  <a href="#128040" class="name">
  <strong class="user"><em>jasonlester at nope dot com</em></strong></a><a class="genanchor" href="#128040"> &para;</a><div class="date" title="2022-12-23 12:02"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom128040">
<div class="phpcode"><code><span class="html">On FastCGI SAPIs this doesn't kill the process, it just makes the fastcgi handler fully recycle PHP at the end of the script rather than just recycling the request state. This includes php-cgi.</span></code></div>
  </div>
 </div>
  <div class="note" id="99329">  <div class="votes">
    <div id="Vu99329">
    <a href="/manual/vote-note.php?id=99329&amp;page=function.apache-child-terminate&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd99329">
    <a href="/manual/vote-note.php?id=99329&amp;page=function.apache-child-terminate&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V99329" title="50% like this...">
    0
    </div>
  </div>
  <a href="#99329" class="name">
  <strong class="user"><em>Stephan Ferraro</em></strong></a><a class="genanchor" href="#99329"> &para;</a><div class="date" title="2010-08-11 02:39"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom99329">
<div class="phpcode"><code><span class="html">I found out a solution for Apache 2. However this works only without threads and only on POSIX compatible OS systems (e.g. Linux, OpenSolaris...).
<br />
<br /><span class="default">&lt;?php
<br />
<br /></span><span class="comment">// Terminate Apache 2 child process after request has been
<br />// done by sending a SIGWINCH POSIX signal (28).
<br /></span><span class="keyword">function </span><span class="default">kill_on_exit</span><span class="keyword">() {
<br /> </span><span class="default">posix_kill</span><span class="keyword">( </span><span class="default">getmypid</span><span class="keyword">(), </span><span class="default">28 </span><span class="keyword">);
<br />}
<br />
<br /></span><span class="default">register_shutdown_function</span><span class="keyword">( </span><span class="string">'kill_on_exit' </span><span class="keyword">);
<br />
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="80713">  <div class="votes">
    <div id="Vu80713">
    <a href="/manual/vote-note.php?id=80713&amp;page=function.apache-child-terminate&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd80713">
    <a href="/manual/vote-note.php?id=80713&amp;page=function.apache-child-terminate&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V80713" title="50% like this...">
    0
    </div>
  </div>
  <a href="#80713" class="name">
  <strong class="user"><em>louis at ewens dot com</em></strong></a><a class="genanchor" href="#80713"> &para;</a><div class="date" title="2008-01-29 04:29"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom80713">
<div class="phpcode"><code><span class="html">Apache child processes are greedy. If they get bloated by a PHP application that requires a lot of memory, they stay that way. The memory is never given back to the OS until that child dies.<br /><br />You could use MaxRequestsPerChild in Apache to kill all child processes automatically after a certain number of connections. Or you can use apache_child_terminate to kill the child after your memory intensive functions.<br /><br />Note: apache_child_terminate is not available in Apache 2.0 handler.</span></code></div>
  </div>
 </div>
  <div class="note" id="80103">  <div class="votes">
    <div id="Vu80103">
    <a href="/manual/vote-note.php?id=80103&amp;page=function.apache-child-terminate&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd80103">
    <a href="/manual/vote-note.php?id=80103&amp;page=function.apache-child-terminate&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V80103" title="50% like this...">
    0
    </div>
  </div>
  <a href="#80103" class="name">
  <strong class="user"><em>daniele_dll at yahoo dot it</em></strong></a><a class="genanchor" href="#80103"> &para;</a><div class="date" title="2007-12-29 03:18"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom80103">
<div class="phpcode"><code><span class="html">In response to sam at liddicott dot com:<br /><br />it isin't so simple! You should never kill an apache process because it is automatically freed when apache need!<br /><br />And, if you use apache worker or thread based mpm you risk to kill the entire process!<br /><br />result: DO NOT USE THIS FUNCTION!</span></code></div>
  </div>
 </div>
  <div class="note" id="79649">  <div class="votes">
    <div id="Vu79649">
    <a href="/manual/vote-note.php?id=79649&amp;page=function.apache-child-terminate&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd79649">
    <a href="/manual/vote-note.php?id=79649&amp;page=function.apache-child-terminate&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V79649" title="40% like this...">
    -2
    </div>
  </div>
  <a href="#79649" class="name">
  <strong class="user"><em>admin at hostultra dot com</em></strong></a><a class="genanchor" href="#79649"> &para;</a><div class="date" title="2007-12-06 08:43"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom79649">
<div class="phpcode"><code><span class="html">this code will add apache_child_terminate() function if it is not already present.<br /><br />if (!function_exists("apache_child_terminate")){<br />function apache_child_terminate(){<br />register_shutdown_function("killonexit");<br />}<br /><br />function killonexit(){<br />@exec("kill ".getmypid());<br />}<br />}</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.apache-child-terminate&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.apache-child-terminate.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.apache.php">Apache Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="current">
                            <a href="function.apache-child-terminate.php" title="apache_&#8203;child_&#8203;terminate">apache_&#8203;child_&#8203;terminate</a>
                        </li>
                                                <li class="">
                            <a href="function.apache-get-modules.php" title="apache_&#8203;get_&#8203;modules">apache_&#8203;get_&#8203;modules</a>
                        </li>
                                                <li class="">
                            <a href="function.apache-get-version.php" title="apache_&#8203;get_&#8203;version">apache_&#8203;get_&#8203;version</a>
                        </li>
                                                <li class="">
                            <a href="function.apache-getenv.php" title="apache_&#8203;getenv">apache_&#8203;getenv</a>
                        </li>
                                                <li class="">
                            <a href="function.apache-lookup-uri.php" title="apache_&#8203;lookup_&#8203;uri">apache_&#8203;lookup_&#8203;uri</a>
                        </li>
                                                <li class="">
                            <a href="function.apache-note.php" title="apache_&#8203;note">apache_&#8203;note</a>
                        </li>
                                                <li class="">
                            <a href="function.apache-request-headers.php" title="apache_&#8203;request_&#8203;headers">apache_&#8203;request_&#8203;headers</a>
                        </li>
                                                <li class="">
                            <a href="function.apache-response-headers.php" title="apache_&#8203;response_&#8203;headers">apache_&#8203;response_&#8203;headers</a>
                        </li>
                                                <li class="">
                            <a href="function.apache-setenv.php" title="apache_&#8203;setenv">apache_&#8203;setenv</a>
                        </li>
                                                <li class="">
                            <a href="function.getallheaders.php" title="getallheaders">getallheaders</a>
                        </li>
                                                <li class="">
                            <a href="function.virtual.php" title="virtual">virtual</a>
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
