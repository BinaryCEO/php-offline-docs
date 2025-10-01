<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: $_SESSION - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/reserved.variables.session.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/reserved.variables.session.php">
 <link rel="alternate" href="https://www.php.net/manual/en/reserved.variables.session.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/reserved.variables.php">
 <link rel="prev" href="https://www.php.net/manual/en/reserved.variables.request.php">
 <link rel="next" href="https://www.php.net/manual/en/reserved.variables.environment.php">

 <link rel="alternate" href="https://www.php.net/manual/en/reserved.variables.session.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/reserved.variables.session.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/reserved.variables.session.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/reserved.variables.session.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/reserved.variables.session.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/reserved.variables.session.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/reserved.variables.session.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/reserved.variables.session.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/reserved.variables.session.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/reserved.variables.session.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/reserved.variables.session.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Session variables" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: $_SESSION - Manual" />
<meta name="twitter:description" content="Session variables" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: $_SESSION - Manual" />
<meta itemprop="description" content="Session variables" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Session variables" />

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
        <a href="reserved.variables.environment.php">
          $_ENV &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="reserved.variables.request.php">
          &laquo; $_REQUEST        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='langref.php'>Language Reference</a></li>      <li><a href='reserved.variables.php'>Predefined Variables</a></li>      </ul>
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
            <option value='en/reserved.variables.session.php' selected="selected">English</option>
            <option value='de/reserved.variables.session.php'>German</option>
            <option value='es/reserved.variables.session.php'>Spanish</option>
            <option value='fr/reserved.variables.session.php'>French</option>
            <option value='it/reserved.variables.session.php'>Italian</option>
            <option value='ja/reserved.variables.session.php'>Japanese</option>
            <option value='pt_BR/reserved.variables.session.php'>Brazilian Portuguese</option>
            <option value='ru/reserved.variables.session.php'>Russian</option>
            <option value='tr/reserved.variables.session.php'>Turkish</option>
            <option value='uk/reserved.variables.session.php'>Ukrainian</option>
            <option value='zh/reserved.variables.session.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="reserved.variables.session" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">$_SESSION</h1>
  <p class="verinfo">(PHP 4 &gt;= 4.1.0, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">$_SESSION</span> &mdash; <span class="dc-title">Session variables</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-reserved.variables.session-description">
  <h3 class="title">Description</h3>
  <p class="para">
   An associative array containing session variables available to
   the current script. See the <a href="ref.session.php" class="link">Session
   functions</a> documentation for more information on how this
   is used.
  </p>
 </div>


 <div class="refsect1 notes" id="refsect1-reserved.variables.session-notes">
  <h3 class="title">Notes</h3>
  <blockquote class="note"><p><strong class="note">Note</strong>: <p class="para">This is a &#039;superglobal&#039;, or
automatic global, variable. This simply means that it is available in
all scopes throughout a script. There is no need to do
<strong class="command">global $variable;</strong> to access it within functions or methods.
</p></p></blockquote>
 </div>


 <div class="refsect1 seealso" id="refsect1-reserved.variables.session-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.session-start.php" class="function" rel="rdfs-seeAlso">session_start()</a> - Start new or resume existing session</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/language/predefined/variables/session.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Freserved.variables.session%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=reserved.variables.session&amp;repo=en&amp;redirect=https://www.php.net/manual/en/reserved.variables.session.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">3 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="116843">  <div class="votes">
    <div id="Vu116843">
    <a href="/manual/vote-note.php?id=116843&amp;page=reserved.variables.session&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116843">
    <a href="/manual/vote-note.php?id=116843&amp;page=reserved.variables.session&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116843" title="53% like this...">
    92
    </div>
  </div>
  <a href="#116843" class="name">
  <strong class="user"><em>Tugrul</em></strong></a><a class="genanchor" href="#116843"> &para;</a><div class="date" title="2015-03-09 05:04"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116843">
<div class="phpcode"><code><span class="html">Creating New Session
<br />==========================
<br /><span class="default">&lt;?php 
<br />session_start</span><span class="keyword">();
<br /></span><span class="comment">/*session is started if you don't write this line can't use $_Session  global variable*/
<br /></span><span class="default">$_SESSION</span><span class="keyword">[</span><span class="string">"newsession"</span><span class="keyword">]=</span><span class="default">$value</span><span class="keyword">;
<br /></span><span class="default">?&gt;
<br /></span>Getting Session
<br />==========================
<br /><span class="default">&lt;?php 
<br />session_start</span><span class="keyword">();
<br /></span><span class="comment">/*session is started if you don't write this line can't use $_Session  global variable*/
<br /></span><span class="default">$_SESSION</span><span class="keyword">[</span><span class="string">"newsession"</span><span class="keyword">]=</span><span class="default">$value</span><span class="keyword">;
<br /></span><span class="comment">/*session created*/
<br /></span><span class="keyword">echo </span><span class="default">$_SESSION</span><span class="keyword">[</span><span class="string">"newsession"</span><span class="keyword">];
<br /></span><span class="comment">/*session was getting*/
<br /></span><span class="default">?&gt;
<br /></span>Updating Session
<br />==========================
<br /><span class="default">&lt;?php 
<br />session_start</span><span class="keyword">();
<br /></span><span class="comment">/*session is started if you don't write this line can't use $_Session  global variable*/
<br /></span><span class="default">$_SESSION</span><span class="keyword">[</span><span class="string">"newsession"</span><span class="keyword">]=</span><span class="default">$value</span><span class="keyword">;
<br /></span><span class="comment">/*it is my new session*/
<br /></span><span class="default">$_SESSION</span><span class="keyword">[</span><span class="string">"newsession"</span><span class="keyword">]=</span><span class="default">$updatedvalue</span><span class="keyword">;
<br /></span><span class="comment">/*session updated*/
<br /></span><span class="default">?&gt;
<br /></span>Deleting Session
<br />==========================
<br /><span class="default">&lt;?php 
<br />session_start</span><span class="keyword">();
<br /></span><span class="comment">/*session is started if you don't write this line can't use $_Session  global variable*/
<br /></span><span class="default">$_SESSION</span><span class="keyword">[</span><span class="string">"newsession"</span><span class="keyword">]=</span><span class="default">$value</span><span class="keyword">;
<br />unset(</span><span class="default">$_SESSION</span><span class="keyword">[</span><span class="string">"newsession"</span><span class="keyword">]);
<br /></span><span class="comment">/*session deleted. if you try using this you've got an error*/
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="113114">  <div class="votes">
    <div id="Vu113114">
    <a href="/manual/vote-note.php?id=113114&amp;page=reserved.variables.session&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113114">
    <a href="/manual/vote-note.php?id=113114&amp;page=reserved.variables.session&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113114" title="50% like this...">
    0
    </div>
  </div>
  <a href="#113114" class="name">
  <strong class="user"><em>opajaap at opajaap dot nl</em></strong></a><a class="genanchor" href="#113114"> &para;</a><div class="date" title="2013-08-31 11:51"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom113114">
<div class="phpcode"><code><span class="html">Be carefull with $_SESSION array elements when you have the same name as a normal global.<br /><br />The following example leads to unpredictable behaviour of the $wppa array elements, some are updated by normal code, some not, it is totally unpredictable what happens.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">global </span><span class="default">$wppa</span><span class="keyword">;<br /></span><span class="default">$wppa </span><span class="keyword">= array( </span><span class="string">'elm1' </span><span class="keyword">=&gt; </span><span class="string">'value1'</span><span class="keyword">, </span><span class="string">'elm2' </span><span class="keyword">=&gt; </span><span class="string">'value2'</span><span class="keyword">, ....</span><span class="default">etc</span><span class="keyword">...);<br /><br />if ( ! </span><span class="default">session_id</span><span class="keyword">() ) @ </span><span class="default">session_start</span><span class="keyword">();<br />if ( ! isset(</span><span class="default">$_SESSION</span><span class="keyword">[</span><span class="string">'wppa'</span><span class="keyword">]) </span><span class="default">$_SESSION</span><span class="keyword">[</span><span class="string">'wppa'</span><span class="keyword">] = array();<br /><br />if ( ! isset(</span><span class="default">$_SESSION</span><span class="keyword">[</span><span class="string">'wppa'</span><span class="keyword">][</span><span class="string">'album'</span><span class="keyword">]) ) </span><span class="default">$_SESSION</span><span class="keyword">[</span><span class="string">'wppa'</span><span class="keyword">][</span><span class="string">'album'</span><span class="keyword">] = array();<br /></span><span class="default">$_SESSION</span><span class="keyword">[</span><span class="string">'wppa'</span><span class="keyword">][</span><span class="string">'album'</span><span class="keyword">][</span><span class="default">1234</span><span class="keyword">] = </span><span class="default">1</span><span class="keyword">;<br /><br /></span><span class="default">$wppa</span><span class="keyword">[</span><span class="string">'elm1'</span><span class="keyword">] = </span><span class="string">'newvalue1'</span><span class="keyword">;<br /><br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$_SESSION</span><span class="keyword">); <br /></span><span class="default">?&gt;<br /></span>This will most likely display Array ( [wppa] =&gt; Array ( [album] =&gt; Array ( [1234] =&gt; 1 ) [elm1] =&gt; 'newvalue1' [elm2] =&gt; 'value2' ... etc ...<br />But setting $wppa['elm1'] to another value or referring to it gives unpredictable results, maybe 'value1', or 'newvalue1'. <br /><br />The most strange behaviour is that not all elements of $wppa[xx] show up as $_SESSION['wppa'][xx].</span></code></div>
  </div>
 </div>
  <div class="note" id="85448">  <div class="votes">
    <div id="Vu85448">
    <a href="/manual/vote-note.php?id=85448&amp;page=reserved.variables.session&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd85448">
    <a href="/manual/vote-note.php?id=85448&amp;page=reserved.variables.session&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V85448" title="50% like this...">
    0
    </div>
  </div>
  <a href="#85448" class="name">
  <strong class="user"><em>bohwaz</em></strong></a><a class="genanchor" href="#85448"> &para;</a><div class="date" title="2008-08-31 02:43"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom85448">
<div class="phpcode"><code><span class="html">Please note that if you have register_globals to On, global variables associated to $_SESSION variables are references, so this may lead to some weird situations.<br /><br /><span class="default">&lt;?php<br /><br />session_start</span><span class="keyword">();<br /><br /></span><span class="default">$_SESSION</span><span class="keyword">[</span><span class="string">'test'</span><span class="keyword">] = </span><span class="default">42</span><span class="keyword">;<br /></span><span class="default">$test </span><span class="keyword">= </span><span class="default">43</span><span class="keyword">;<br />echo </span><span class="default">$_SESSION</span><span class="keyword">[</span><span class="string">'test'</span><span class="keyword">];<br /><br /></span><span class="default">?&gt;<br /></span><br />Load the page, OK it displays 42, reload the page... it displays 43.<br /><br />The solution is to do this after each time you do a session_start() :<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">if (</span><span class="default">ini_get</span><span class="keyword">(</span><span class="string">'register_globals'</span><span class="keyword">))<br />{<br />    foreach (</span><span class="default">$_SESSION </span><span class="keyword">as </span><span class="default">$key</span><span class="keyword">=&gt;</span><span class="default">$value</span><span class="keyword">)<br />    {<br />        if (isset(</span><span class="default">$GLOBALS</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">]))<br />            unset(</span><span class="default">$GLOBALS</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">]);<br />    }<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=reserved.variables.session&amp;repo=en&amp;redirect=https://www.php.net/manual/en/reserved.variables.session.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="reserved.variables.php">Predefined Variables</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="language.variables.superglobals.php" title="Superglobals">Superglobals</a>
                        </li>
                                                <li class="">
                            <a href="reserved.variables.globals.php" title="$GLOBALS">$GLOBALS</a>
                        </li>
                                                <li class="">
                            <a href="reserved.variables.server.php" title="$_&#8203;SERVER">$_&#8203;SERVER</a>
                        </li>
                                                <li class="">
                            <a href="reserved.variables.get.php" title="$_&#8203;GET">$_&#8203;GET</a>
                        </li>
                                                <li class="">
                            <a href="reserved.variables.post.php" title="$_&#8203;POST">$_&#8203;POST</a>
                        </li>
                                                <li class="">
                            <a href="reserved.variables.files.php" title="$_&#8203;FILES">$_&#8203;FILES</a>
                        </li>
                                                <li class="">
                            <a href="reserved.variables.request.php" title="$_&#8203;REQUEST">$_&#8203;REQUEST</a>
                        </li>
                                                <li class="current">
                            <a href="reserved.variables.session.php" title="$_&#8203;SESSION">$_&#8203;SESSION</a>
                        </li>
                                                <li class="">
                            <a href="reserved.variables.environment.php" title="$_&#8203;ENV">$_&#8203;ENV</a>
                        </li>
                                                <li class="">
                            <a href="reserved.variables.cookies.php" title="$_&#8203;COOKIE">$_&#8203;COOKIE</a>
                        </li>
                                                <li class="">
                            <a href="reserved.variables.httpresponseheader.php" title="$http_&#8203;response_&#8203;header">$http_&#8203;response_&#8203;header</a>
                        </li>
                                                <li class="">
                            <a href="reserved.variables.argc.php" title="$argc">$argc</a>
                        </li>
                                                <li class="">
                            <a href="reserved.variables.argv.php" title="$argv">$argv</a>
                        </li>
                        
                    </ul>
                
            </li>
                        
                        <li>
                <span class="header">Deprecated</span>
                <ul class="child-menu-list">
                                    <li class="">
                        <a href="reserved.variables.phperrormsg.php" title="$php_&#8203;errormsg">$php_&#8203;errormsg</a>
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
