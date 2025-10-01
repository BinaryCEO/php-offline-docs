<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: $_FILES - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/reserved.variables.files.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/reserved.variables.files.php">
 <link rel="alternate" href="https://www.php.net/manual/en/reserved.variables.files.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/reserved.variables.php">
 <link rel="prev" href="https://www.php.net/manual/en/reserved.variables.post.php">
 <link rel="next" href="https://www.php.net/manual/en/reserved.variables.request.php">

 <link rel="alternate" href="https://www.php.net/manual/en/reserved.variables.files.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/reserved.variables.files.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/reserved.variables.files.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/reserved.variables.files.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/reserved.variables.files.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/reserved.variables.files.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/reserved.variables.files.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/reserved.variables.files.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/reserved.variables.files.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/reserved.variables.files.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/reserved.variables.files.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="HTTP File Upload variables" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: $_FILES - Manual" />
<meta name="twitter:description" content="HTTP File Upload variables" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: $_FILES - Manual" />
<meta itemprop="description" content="HTTP File Upload variables" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="HTTP File Upload variables" />

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
        <a href="reserved.variables.request.php">
          $_REQUEST &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="reserved.variables.post.php">
          &laquo; $_POST        </a>
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
            <option value='en/reserved.variables.files.php' selected="selected">English</option>
            <option value='de/reserved.variables.files.php'>German</option>
            <option value='es/reserved.variables.files.php'>Spanish</option>
            <option value='fr/reserved.variables.files.php'>French</option>
            <option value='it/reserved.variables.files.php'>Italian</option>
            <option value='ja/reserved.variables.files.php'>Japanese</option>
            <option value='pt_BR/reserved.variables.files.php'>Brazilian Portuguese</option>
            <option value='ru/reserved.variables.files.php'>Russian</option>
            <option value='tr/reserved.variables.files.php'>Turkish</option>
            <option value='uk/reserved.variables.files.php'>Ukrainian</option>
            <option value='zh/reserved.variables.files.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="reserved.variables.files" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">$_FILES</h1>
  <p class="verinfo">(PHP 4 &gt;= 4.1.0, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">$_FILES</span> &mdash; <span class="dc-title">HTTP File Upload variables</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-reserved.variables.files-description">
  <h3 class="title">Description</h3>
  <p class="para">
   An associative <span class="type"><a href="language.types.array.php" class="type array">array</a></span> of items uploaded to the current script
   via the HTTP POST method. The structure of this array is outlined in the
   <a href="features.file-upload.post-method.php" class="link">POST method uploads</a>
   section.
  </p>
 </div>

 
 <div class="refsect1 notes" id="refsect1-reserved.variables.files-notes">
  <h3 class="title">Notes</h3>
  <blockquote class="note"><p><strong class="note">Note</strong>: <p class="para">This is a &#039;superglobal&#039;, or
automatic global, variable. This simply means that it is available in
all scopes throughout a script. There is no need to do
<strong class="command">global $variable;</strong> to access it within functions or methods.
</p></p></blockquote>
 </div>


 <div class="refsect1 seealso" id="refsect1-reserved.variables.files-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.move-uploaded-file.php" class="function" rel="rdfs-seeAlso">move_uploaded_file()</a> - Moves an uploaded file to a new location</span></li>
    <li><a href="features.file-upload.php" class="link">Handling File Uploads</a></li>
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
        <a href="https://github.com/php/doc-en/blob/master/language/predefined/variables/files.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Freserved.variables.files%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=reserved.variables.files&amp;repo=en&amp;redirect=https://www.php.net/manual/en/reserved.variables.files.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">13 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="116149">  <div class="votes">
    <div id="Vu116149">
    <a href="/manual/vote-note.php?id=116149&amp;page=reserved.variables.files&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116149">
    <a href="/manual/vote-note.php?id=116149&amp;page=reserved.variables.files&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116149" title="85% like this...">
    863
    </div>
  </div>
  <a href="#116149" class="name">
  <strong class="user"><em>scohen987 at gmail dot com</em></strong></a><a class="genanchor" href="#116149"> &para;</a><div class="date" title="2014-11-14 09:49"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116149">
<div class="phpcode"><code><span class="html">see <a href="http://php.net/manual/en/features.file-upload.post-method.php" rel="nofollow" target="_blank">http://php.net/manual/en/features.file-upload.post-method.php</a> for documentation of the $_FILES array, which is what I came to this page for in the first place.</span></code></div>
  </div>
 </div>
  <div class="note" id="114644">  <div class="votes">
    <div id="Vu114644">
    <a href="/manual/vote-note.php?id=114644&amp;page=reserved.variables.files&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114644">
    <a href="/manual/vote-note.php?id=114644&amp;page=reserved.variables.files&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114644" title="65% like this...">
    92
    </div>
  </div>
  <a href="#114644" class="name">
  <strong class="user"><em>brian at diamondsea dot com</em></strong></a><a class="genanchor" href="#114644"> &para;</a><div class="date" title="2014-03-16 06:11"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114644">
<div class="phpcode"><code><span class="html">If you are looking for the $_FILES['error'] code explanations, be sure to read:<br /><br />Handling File Uploads - Error Messages Explained<br /><a href="http://www.php.net/manual/en/features.file-upload.errors.php" rel="nofollow" target="_blank">http://www.php.net/manual/en/features.file-upload.errors.php</a></span></code></div>
  </div>
 </div>
  <div class="note" id="109958">  <div class="votes">
    <div id="Vu109958">
    <a href="/manual/vote-note.php?id=109958&amp;page=reserved.variables.files&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd109958">
    <a href="/manual/vote-note.php?id=109958&amp;page=reserved.variables.files&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V109958" title="57% like this...">
    65
    </div>
  </div>
  <a href="#109958" class="name">
  <strong class="user"><em>sergio_ag at terra dot com dot br</em></strong></a><a class="genanchor" href="#109958"> &para;</a><div class="date" title="2012-09-05 08:09"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom109958">
<div class="phpcode"><code><span class="html">A nice trick to reorder the $_FILES array when you use a input name as array is:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">diverse_array</span><span class="keyword">(</span><span class="default">$vector</span><span class="keyword">) {
<br />    </span><span class="default">$result </span><span class="keyword">= array();
<br />    foreach(</span><span class="default">$vector </span><span class="keyword">as </span><span class="default">$key1 </span><span class="keyword">=&gt; </span><span class="default">$value1</span><span class="keyword">)
<br />        foreach(</span><span class="default">$value1 </span><span class="keyword">as </span><span class="default">$key2 </span><span class="keyword">=&gt; </span><span class="default">$value2</span><span class="keyword">)
<br />            </span><span class="default">$result</span><span class="keyword">[</span><span class="default">$key2</span><span class="keyword">][</span><span class="default">$key1</span><span class="keyword">] = </span><span class="default">$value2</span><span class="keyword">;
<br />    return </span><span class="default">$result</span><span class="keyword">;
<br />}
<br /></span><span class="default">?&gt;
<br /></span>
<br />will transform this:
<br />
<br />array(1) {
<br />    ["upload"]=&gt;array(2) {
<br />        ["name"]=&gt;array(2) {
<br />            [0]=&gt;string(9)"file0.txt"
<br />            [1]=&gt;string(9)"file1.txt"
<br />        }
<br />        ["type"]=&gt;array(2) {
<br />            [0]=&gt;string(10)"text/plain"
<br />            [1]=&gt;string(10)"text/html"
<br />        }
<br />    }
<br />}
<br />
<br />into:
<br />
<br />array(1) {
<br />    ["upload"]=&gt;array(2) {
<br />        [0]=&gt;array(2) {
<br />            ["name"]=&gt;string(9)"file0.txt"
<br />            ["type"]=&gt;string(10)"text/plain"
<br />        },
<br />        [1]=&gt;array(2) {
<br />            ["name"]=&gt;string(9)"file1.txt"
<br />            ["type"]=&gt;string(10)"text/html"
<br />        }
<br />    }
<br />}
<br />
<br />just do:
<br />
<br /><span class="default">&lt;?php $upload </span><span class="keyword">= </span><span class="default">diverse_array</span><span class="keyword">(</span><span class="default">$_FILES</span><span class="keyword">[</span><span class="string">"upload"</span><span class="keyword">]); </span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="125857">  <div class="votes">
    <div id="Vu125857">
    <a href="/manual/vote-note.php?id=125857&amp;page=reserved.variables.files&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125857">
    <a href="/manual/vote-note.php?id=125857&amp;page=reserved.variables.files&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125857" title="58% like this...">
    3
    </div>
  </div>
  <a href="#125857" class="name">
  <strong class="user"><em>ymlmau at gmail dot com</em></strong></a><a class="genanchor" href="#125857"> &para;</a><div class="date" title="2021-02-23 05:17"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom125857">
<div class="phpcode"><code><span class="html">Best way to check if $_FILES is empty or not is to check if the name of the index 0 is set. <br /><br /><span class="default">&lt;?php <br /></span><span class="keyword">if (</span><span class="default">$_FILES</span><span class="keyword">[</span><span class="string">'fieldname'</span><span class="keyword">][</span><span class="string">'name'</span><span class="keyword">][</span><span class="default">0</span><span class="keyword">] != </span><span class="string">""</span><span class="keyword">){<br /> </span><span class="comment">//Code goes here!<br /></span><span class="keyword">}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="89674">  <div class="votes">
    <div id="Vu89674">
    <a href="/manual/vote-note.php?id=89674&amp;page=reserved.variables.files&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd89674">
    <a href="/manual/vote-note.php?id=89674&amp;page=reserved.variables.files&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V89674" title="58% like this...">
    57
    </div>
  </div>
  <a href="#89674" class="name">
  <strong class="user"><em>dewi at dewimorgan dot com</em></strong></a><a class="genanchor" href="#89674"> &para;</a><div class="date" title="2009-03-18 10:35"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom89674">
<div class="phpcode"><code><span class="html">The format of this array is (assuming your form has two input type=file fields named "file1", "file2", etc):<br /><br />Array<br />(<br />    [file1] =&gt; Array<br />        (<br />            [name] =&gt; MyFile.txt (comes from the browser, so treat as tainted)<br />            [type] =&gt; text/plain  (not sure where it gets this from - assume the browser, so treat as tainted)<br />            [tmp_name] =&gt; /tmp/php/php1h4j1o (could be anywhere on your system, depending on your config settings, but the user has no control, so this isn't tainted)<br />            [error] =&gt; UPLOAD_ERR_OK  (= 0)<br />            [size] =&gt; 123   (the size in bytes)<br />        )<br /><br />    [file2] =&gt; Array<br />        (<br />            [name] =&gt; MyFile.jpg<br />            [type] =&gt; image/jpeg<br />            [tmp_name] =&gt; /tmp/php/php6hst32<br />            [error] =&gt; UPLOAD_ERR_OK<br />            [size] =&gt; 98174<br />        )<br />)<br /><br />Last I checked (a while ago now admittedly), if you use array parameters in your forms (that is, form names ending in square brackets, like several file fields called "download[file1]", "download[file2]" etc), then the array format becomes... interesting.<br /><br />Array<br />(<br />    [download] =&gt; Array<br />        (<br />            [name] =&gt; Array<br />                (<br />                    [file1] =&gt; MyFile.txt<br />                    [file2] =&gt; MyFile.jpg<br />                )<br /><br />            [type] =&gt; Array<br />                (<br />                    [file1] =&gt; text/plain<br />                    [file2] =&gt; image/jpeg<br />                )<br /><br />            [tmp_name] =&gt; Array<br />                (<br />                    [file1] =&gt; /tmp/php/php1h4j1o<br />                    [file2] =&gt; /tmp/php/php6hst32<br />                )<br /><br />            [error] =&gt; Array<br />                (<br />                    [file1] =&gt; UPLOAD_ERR_OK<br />                    [file2] =&gt; UPLOAD_ERR_OK<br />                )<br /><br />            [size] =&gt; Array<br />                (<br />                    [file1] =&gt; 123<br />                    [file2] =&gt; 98174<br />                )<br />        )<br />)<br /><br />So you'd need to access the error param of file1 as, eg $_Files['download']['error']['file1']</span></code></div>
  </div>
 </div>
  <div class="note" id="109902">  <div class="votes">
    <div id="Vu109902">
    <a href="/manual/vote-note.php?id=109902&amp;page=reserved.variables.files&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd109902">
    <a href="/manual/vote-note.php?id=109902&amp;page=reserved.variables.files&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V109902" title="58% like this...">
    31
    </div>
  </div>
  <a href="#109902" class="name">
  <strong class="user"><em>sparticvs at popebp dot com</em></strong></a><a class="genanchor" href="#109902"> &para;</a><div class="date" title="2012-09-01 08:59"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom109902">
<div class="phpcode"><code><span class="html">A note of security: Don't ever trust $_FILES["image"]["type"]. It takes whatever is sent from the browser, so don't trust this for the image type.  I recommend using finfo_open (<a href="http://www.php.net/manual/en/function.finfo-open.php" rel="nofollow" target="_blank">http://www.php.net/manual/en/function.finfo-open.php</a>) to verify the MIME type of a file. It will parse the MAGIC in the file and return it's type...this can be trusted (you can also use the "file" program on Unix, but I would refrain from ever making a System call with your PHP code...that's just asking for problems).</span></code></div>
  </div>
 </div>
  <div class="note" id="121618">  <div class="votes">
    <div id="Vu121618">
    <a href="/manual/vote-note.php?id=121618&amp;page=reserved.variables.files&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121618">
    <a href="/manual/vote-note.php?id=121618&amp;page=reserved.variables.files&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121618" title="56% like this...">
    9
    </div>
  </div>
  <a href="#121618" class="name">
  <strong class="user"><em>tuomas dot piispanen at gmail dot com</em></strong></a><a class="genanchor" href="#121618"> &para;</a><div class="date" title="2017-09-07 10:36"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121618">
<div class="phpcode"><code><span class="html">Here's a function that I have used to get a nice simple array of all incoming files from a page. It basically just flattens the $FILES array. This function works on many file inputs on the page and also if the inputs are '&lt;input type="file[]" multiple&gt;'. Note that this function loses the file input names (I usually process the files just by type).<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">incoming_files</span><span class="keyword">() {<br />    </span><span class="default">$files </span><span class="keyword">= </span><span class="default">$_FILES</span><span class="keyword">;<br />    </span><span class="default">$files2 </span><span class="keyword">= [];<br />    foreach (</span><span class="default">$files </span><span class="keyword">as </span><span class="default">$input </span><span class="keyword">=&gt; </span><span class="default">$infoArr</span><span class="keyword">) {<br />        </span><span class="default">$filesByInput </span><span class="keyword">= [];<br />        foreach (</span><span class="default">$infoArr </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$valueArr</span><span class="keyword">) {<br />            if (</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$valueArr</span><span class="keyword">)) { </span><span class="comment">// file input "multiple"<br />                </span><span class="keyword">foreach(</span><span class="default">$valueArr </span><span class="keyword">as </span><span class="default">$i</span><span class="keyword">=&gt;</span><span class="default">$value</span><span class="keyword">) {<br />                    </span><span class="default">$filesByInput</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">][</span><span class="default">$key</span><span class="keyword">] = </span><span class="default">$value</span><span class="keyword">;<br />                }<br />            }<br />            else { </span><span class="comment">// -&gt; string, normal file input<br />                </span><span class="default">$filesByInput</span><span class="keyword">[] = </span><span class="default">$infoArr</span><span class="keyword">;<br />                break;<br />            }<br />        }<br />        </span><span class="default">$files2 </span><span class="keyword">= </span><span class="default">array_merge</span><span class="keyword">(</span><span class="default">$files2</span><span class="keyword">,</span><span class="default">$filesByInput</span><span class="keyword">);<br />    }<br />    </span><span class="default">$files3 </span><span class="keyword">= [];<br />    foreach(</span><span class="default">$files2 </span><span class="keyword">as </span><span class="default">$file</span><span class="keyword">) { </span><span class="comment">// let's filter empty &amp; errors<br />        </span><span class="keyword">if (!</span><span class="default">$file</span><span class="keyword">[</span><span class="string">'error'</span><span class="keyword">]) </span><span class="default">$files3</span><span class="keyword">[] = </span><span class="default">$file</span><span class="keyword">;<br />    }<br />    return </span><span class="default">$files3</span><span class="keyword">;<br />}<br /><br /></span><span class="default">$tmpFiles </span><span class="keyword">= </span><span class="default">incoming_files</span><span class="keyword">();<br /><br /></span><span class="default">?&gt;<br /></span><br />will transform this: <br /><br />Array<br />(<br />    [files1] =&gt; Array<br />        (<br />            [name] =&gt; facepalm.jpg<br />            [type] =&gt; image/jpeg<br />            [tmp_name] =&gt; /tmp/php3zU3t5<br />            [error] =&gt; 0<br />            [size] =&gt; 31059<br />        )<br /><br />    [files2] =&gt; Array<br />        (<br />            [name] =&gt; Array<br />                (<br />                    [0] =&gt; facepalm2.jpg<br />                    [1] =&gt; facepalm3.jpg<br />                )<br /><br />            [type] =&gt; Array<br />                (<br />                    [0] =&gt; image/jpeg<br />                    [1] =&gt; image/jpeg<br />                )<br /><br />            [tmp_name] =&gt; Array<br />                (<br />                    [0] =&gt; /tmp/phpJutmOS<br />                    [1] =&gt; /tmp/php9bNI8F<br />                )<br /><br />            [error] =&gt; Array<br />                (<br />                    [0] =&gt; 0<br />                    [1] =&gt; 0<br />                )<br /><br />            [size] =&gt; Array<br />                (<br />                    [0] =&gt; 78085<br />                    [1] =&gt; 61429<br />                )<br /><br />        )<br /><br />)<br /><br />into this: <br /><br />Array<br />(<br />    [0] =&gt; Array<br />        (<br />            [name] =&gt; facepalm.jpg<br />            [type] =&gt; image/jpeg<br />            [tmp_name] =&gt; /tmp/php3zU3t5<br />            [error] =&gt; 0<br />            [size] =&gt; 31059<br />        )<br /><br />    [1] =&gt; Array<br />        (<br />            [name] =&gt; facepalm2.jpg<br />            [type] =&gt; image/jpeg<br />            [tmp_name] =&gt; /tmp/phpJutmOS<br />            [error] =&gt; 0<br />            [size] =&gt; 78085<br />        )<br /><br />    [2] =&gt; Array<br />        (<br />            [name] =&gt; facepalm3.jpg<br />            [type] =&gt; image/jpeg<br />            [tmp_name] =&gt; /tmp/php9bNI8F<br />            [error] =&gt; 0<br />            [size] =&gt; 61429<br />        )<br /><br />)</span></code></div>
  </div>
 </div>
  <div class="note" id="129020">  <div class="votes">
    <div id="Vu129020">
    <a href="/manual/vote-note.php?id=129020&amp;page=reserved.variables.files&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129020">
    <a href="/manual/vote-note.php?id=129020&amp;page=reserved.variables.files&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129020" title="54% like this...">
    1
    </div>
  </div>
  <a href="#129020" class="name">
  <strong class="user"><em>sabeerbikba02 at gmail dot com</em></strong></a><a class="genanchor" href="#129020"> &para;</a><div class="date" title="2023-11-08 04:00"><strong>1 year ago</strong></div>
  <div class="text" id="Hcom129020">
<div class="phpcode"><code><span class="html">Error code returned in $_FILES['userfile']['error'].<br /><br />■UPLOAD_ERROR_OK, value 0, means no error occurred.<br /> ■ UPLOAD_ERR_INI_SIZE, value 1, means that the size of the uploaded file exceeds the<br />maximum value specified in your php.ini file with the upload_max_filesize directive.<br /> ■ UPLOAD_ERR_FORM_SIZE, value 2, means that the size of the uploaded file exceeds the<br />maximum value specified in the HTML form in the MAX_FILE_SIZE element.<br /> ■ UPLOAD_ERR_PARTIAL, value 3, means that the file was only partially uploaded.<br /> ■ UPLOAD_ERR_NO_FILE, value 4, means that no file was uploaded.<br /> ■ UPLOAD_ERR_NO_TMP_DIR, value 6, means that no temporary directory is specified in the<br />php.ini.<br /> ■ UPLOAD_ERR_CANT_WRITE, value 7, means that writing the file to disk failed.<br /> ■ UPLOAD_ERR_EXTENSION, value 8, means that a PHP extension stopped the file upload<br />process.</span></code></div>
  </div>
 </div>
  <div class="note" id="125930">  <div class="votes">
    <div id="Vu125930">
    <a href="/manual/vote-note.php?id=125930&amp;page=reserved.variables.files&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125930">
    <a href="/manual/vote-note.php?id=125930&amp;page=reserved.variables.files&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125930" title="54% like this...">
    3
    </div>
  </div>
  <a href="#125930" class="name">
  <strong class="user"><em>emre</em></strong></a><a class="genanchor" href="#125930"> &para;</a><div class="date" title="2021-03-14 09:21"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom125930">
<div class="phpcode"><code><span class="html">this is frustrating that the explanations redirected by anchors are providing unsufficient information or even worst is provide nothing. instead, looking for people to make the resources locale, you MUST provide approprate documentation for everybody.</span></code></div>
  </div>
 </div>
  <div class="note" id="109648">  <div class="votes">
    <div id="Vu109648">
    <a href="/manual/vote-note.php?id=109648&amp;page=reserved.variables.files&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd109648">
    <a href="/manual/vote-note.php?id=109648&amp;page=reserved.variables.files&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V109648" title="55% like this...">
    10
    </div>
  </div>
  <a href="#109648" class="name">
  <strong class="user"><em>tjbp</em></strong></a><a class="genanchor" href="#109648"> &para;</a><div class="date" title="2012-08-04 09:46"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom109648">
<div class="phpcode"><code><span class="html">For quick debugging (eg. var_dump($_FILES);), these are the values of the error constants. Obviously don't use these for comparison in real code.<br /><br />UPLOAD_ERR_OK: 0<br />UPLOAD_ERR_INI_SIZE: 1<br />UPLOAD_ERR_FORM_SIZE: 2<br />UPLOAD_ERR_NO_TMP_DIR: 6<br />UPLOAD_ERR_CANT_WRITE: 7<br />UPLOAD_ERR_EXTENSION: 8<br />UPLOAD_ERR_PARTIAL: 3</span></code></div>
  </div>
 </div>
  <div class="note" id="105640">  <div class="votes">
    <div id="Vu105640">
    <a href="/manual/vote-note.php?id=105640&amp;page=reserved.variables.files&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd105640">
    <a href="/manual/vote-note.php?id=105640&amp;page=reserved.variables.files&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V105640" title="56% like this...">
    6
    </div>
  </div>
  <a href="#105640" class="name">
  <strong class="user"><em>unca dot alby at gmail dot com</em></strong></a><a class="genanchor" href="#105640"> &para;</a><div class="date" title="2011-09-02 01:31"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom105640">
<div class="phpcode"><code><span class="html">In checking the error code, you probably ought to check for code 4.  I believe Code 4 means no file was uploaded, and there are many instances where that's perfectly OK.<br /><br />Such as when you have a form with multiple data items, including file and image uploads, plus whatever else.  The user might not be adding a new upload for whatever reason, such as there may already be a file in the system from an earlier update, and the user is satisfied with that.</span></code></div>
  </div>
 </div>
  <div class="note" id="106608">  <div class="votes">
    <div id="Vu106608">
    <a href="/manual/vote-note.php?id=106608&amp;page=reserved.variables.files&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd106608">
    <a href="/manual/vote-note.php?id=106608&amp;page=reserved.variables.files&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V106608" title="53% like this...">
    8
    </div>
  </div>
  <a href="#106608" class="name">
  <strong class="user"><em>BigShark666 at gmail dot com</em></strong></a><a class="genanchor" href="#106608"> &para;</a><div class="date" title="2011-11-21 10:51"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom106608">
<div class="phpcode"><code><span class="html">Nontypicall array comes in php after the submission.I wrote a small function to restate it to the familiar look.<br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">multiple</span><span class="keyword">(array </span><span class="default">$_files</span><span class="keyword">, </span><span class="default">$top </span><span class="keyword">= </span><span class="default">TRUE</span><span class="keyword">)<br />{<br />    </span><span class="default">$files </span><span class="keyword">= array();<br />    foreach(</span><span class="default">$_files </span><span class="keyword">as </span><span class="default">$name</span><span class="keyword">=&gt;</span><span class="default">$file</span><span class="keyword">){<br />        if(</span><span class="default">$top</span><span class="keyword">) </span><span class="default">$sub_name </span><span class="keyword">= </span><span class="default">$file</span><span class="keyword">[</span><span class="string">'name'</span><span class="keyword">];<br />        else    </span><span class="default">$sub_name </span><span class="keyword">= </span><span class="default">$name</span><span class="keyword">;<br />        <br />        if(</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$sub_name</span><span class="keyword">)){<br />            foreach(</span><span class="default">array_keys</span><span class="keyword">(</span><span class="default">$sub_name</span><span class="keyword">) as </span><span class="default">$key</span><span class="keyword">){<br />                </span><span class="default">$files</span><span class="keyword">[</span><span class="default">$name</span><span class="keyword">][</span><span class="default">$key</span><span class="keyword">] = array(<br />                    </span><span class="string">'name'     </span><span class="keyword">=&gt; </span><span class="default">$file</span><span class="keyword">[</span><span class="string">'name'</span><span class="keyword">][</span><span class="default">$key</span><span class="keyword">],<br />                    </span><span class="string">'type'     </span><span class="keyword">=&gt; </span><span class="default">$file</span><span class="keyword">[</span><span class="string">'type'</span><span class="keyword">][</span><span class="default">$key</span><span class="keyword">],<br />                    </span><span class="string">'tmp_name' </span><span class="keyword">=&gt; </span><span class="default">$file</span><span class="keyword">[</span><span class="string">'tmp_name'</span><span class="keyword">][</span><span class="default">$key</span><span class="keyword">],<br />                    </span><span class="string">'error'    </span><span class="keyword">=&gt; </span><span class="default">$file</span><span class="keyword">[</span><span class="string">'error'</span><span class="keyword">][</span><span class="default">$key</span><span class="keyword">],<br />                    </span><span class="string">'size'     </span><span class="keyword">=&gt; </span><span class="default">$file</span><span class="keyword">[</span><span class="string">'size'</span><span class="keyword">][</span><span class="default">$key</span><span class="keyword">],<br />                );<br />                </span><span class="default">$files</span><span class="keyword">[</span><span class="default">$name</span><span class="keyword">] = </span><span class="default">multiple</span><span class="keyword">(</span><span class="default">$files</span><span class="keyword">[</span><span class="default">$name</span><span class="keyword">], </span><span class="default">FALSE</span><span class="keyword">);<br />            }<br />        }else{<br />            </span><span class="default">$files</span><span class="keyword">[</span><span class="default">$name</span><span class="keyword">] = </span><span class="default">$file</span><span class="keyword">;<br />        }<br />    }<br />    return </span><span class="default">$files</span><span class="keyword">;<br />}<br /><br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$_FILES</span><span class="keyword">);<br /></span><span class="comment">/*<br />Array<br />(<br />    [image] =&gt; Array<br />        (<br />            [name] =&gt; Array<br />                (<br />                    [0] =&gt; 400.png<br />                )<br />            [type] =&gt; Array<br />                (<br />                    [0] =&gt; image/png<br />                )<br />            [tmp_name] =&gt; Array<br />                (<br />                    [0] =&gt; /tmp/php5Wx0aJ<br />                )<br />            [error] =&gt; Array<br />                (<br />                    [0] =&gt; 0<br />                )<br />            [size] =&gt; Array<br />                (<br />                    [0] =&gt; 15726<br />                )<br />        )<br />)<br />*/<br /></span><span class="default">$files </span><span class="keyword">= </span><span class="default">multiple</span><span class="keyword">(</span><span class="default">$_FILES</span><span class="keyword">);<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$files</span><span class="keyword">);<br /></span><span class="comment">/*<br />Array<br />(<br />    [image] =&gt; Array<br />        (<br />            [0] =&gt; Array<br />                (<br />                    [name] =&gt; 400.png<br />                    [type] =&gt; image/png<br />                    [tmp_name] =&gt; /tmp/php5Wx0aJ<br />                    [error] =&gt; 0<br />                    [size] =&gt; 15726<br />                )<br />        )<br />)<br />*/<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="88251">  <div class="votes">
    <div id="Vu88251">
    <a href="/manual/vote-note.php?id=88251&amp;page=reserved.variables.files&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd88251">
    <a href="/manual/vote-note.php?id=88251&amp;page=reserved.variables.files&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V88251" title="53% like this...">
    9
    </div>
  </div>
  <a href="#88251" class="name">
  <strong class="user"><em>andrewpunch at bigfoot dot com</em></strong></a><a class="genanchor" href="#88251"> &para;</a><div class="date" title="2009-01-17 12:16"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom88251">
<div class="phpcode"><code><span class="html">If $_FILES is empty, even when uploading, try adding enctype="multipart/form-data" to the form tag and make sure you have file uploads turned on.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=reserved.variables.files&amp;repo=en&amp;redirect=https://www.php.net/manual/en/reserved.variables.files.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
                            <a href="reserved.variables.files.php" title="$_&#8203;FILES">$_&#8203;FILES</a>
                        </li>
                                                <li class="">
                            <a href="reserved.variables.request.php" title="$_&#8203;REQUEST">$_&#8203;REQUEST</a>
                        </li>
                                                <li class="">
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
