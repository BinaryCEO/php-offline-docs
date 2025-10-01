<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Spotting References - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/language.references.spot.php">
 <link rel="shorturl" href="https://www.php.net/references.spot">
 <link rel="alternate" href="https://www.php.net/references.spot" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/language.references.php">
 <link rel="prev" href="https://www.php.net/manual/en/language.references.unset.php">
 <link rel="next" href="https://www.php.net/manual/en/reserved.variables.php">

 <link rel="alternate" href="https://www.php.net/manual/en/language.references.spot.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/language.references.spot.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/language.references.spot.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/language.references.spot.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/language.references.spot.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/language.references.spot.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/language.references.spot.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/language.references.spot.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/language.references.spot.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/language.references.spot.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/language.references.spot.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Spotting References" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Spotting References - Manual" />
<meta name="twitter:description" content="Spotting References" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Spotting References - Manual" />
<meta itemprop="description" content="Spotting References" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Spotting References" />

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
        <a href="reserved.variables.php">
          Predefined Variables &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="language.references.unset.php">
          &laquo; Unsetting References        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='langref.php'>Language Reference</a></li>      <li><a href='language.references.php'>References Explained</a></li>      </ul>
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
            <option value='en/language.references.spot.php' selected="selected">English</option>
            <option value='de/language.references.spot.php'>German</option>
            <option value='es/language.references.spot.php'>Spanish</option>
            <option value='fr/language.references.spot.php'>French</option>
            <option value='it/language.references.spot.php'>Italian</option>
            <option value='ja/language.references.spot.php'>Japanese</option>
            <option value='pt_BR/language.references.spot.php'>Brazilian Portuguese</option>
            <option value='ru/language.references.spot.php'>Russian</option>
            <option value='tr/language.references.spot.php'>Turkish</option>
            <option value='uk/language.references.spot.php'>Ukrainian</option>
            <option value='zh/language.references.spot.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="language.references.spot" class="sect1">
   <h2 class="title">Spotting References</h2>
   <p class="simpara">
    Many syntax constructs in PHP are implemented via referencing
    mechanisms, so everything mentioned herein about reference binding also
    applies to these constructs. Some constructs, like passing and
    returning by reference, are mentioned above. Other constructs that
    use references are:
   </p>

   <div class="sect2" id="references.global">
    <h3 class="title">global References</h3>
    <p class="para">
     When you declare a variable as <strong class="command">global $var</strong> you
     are in fact creating reference to a global variable. That means,
     this is the same as:
     <div class="informalexample">
      <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />$var </span><span style="color: #007700">=&amp; </span><span style="color: #0000BB">$GLOBALS</span><span style="color: #007700">[</span><span style="color: #DD0000">"var"</span><span style="color: #007700">];<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
      </div>

     </div>
    </p>
    <p class="simpara">
     This also means that unsetting <var class="varname">$var</var>
     won&#039;t unset the global variable.
    </p>
   </div>
  </div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/language/references.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Flanguage.references.spot%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=language.references.spot&amp;repo=en&amp;redirect=https://www.php.net/manual/en/language.references.spot.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">8 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="72203">  <div class="votes">
    <div id="Vu72203">
    <a href="/manual/vote-note.php?id=72203&amp;page=language.references.spot&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd72203">
    <a href="/manual/vote-note.php?id=72203&amp;page=language.references.spot&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V72203" title="70% like this...">
    22
    </div>
  </div>
  <a href="#72203" class="name">
  <strong class="user"><em>BenBE at omorphia dot de</em></strong></a><a class="genanchor" href="#72203"> &para;</a><div class="date" title="2007-01-07 11:37"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom72203">
<div class="phpcode"><code><span class="html">Hi,<br /><br />If you want to check if two variables are referencing each other (i.e. point to the same memory) you can use a function like this:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">same_type</span><span class="keyword">(&amp;</span><span class="default">$var1</span><span class="keyword">, &amp;</span><span class="default">$var2</span><span class="keyword">){<br />    return </span><span class="default">gettype</span><span class="keyword">(</span><span class="default">$var1</span><span class="keyword">) === </span><span class="default">gettype</span><span class="keyword">(</span><span class="default">$var2</span><span class="keyword">);<br />}<br /><br />function </span><span class="default">is_ref</span><span class="keyword">(&amp;</span><span class="default">$var1</span><span class="keyword">, &amp;</span><span class="default">$var2</span><span class="keyword">) {<br />    </span><span class="comment">//If a reference exists, the type IS the same<br />    </span><span class="keyword">if(!</span><span class="default">same_type</span><span class="keyword">(</span><span class="default">$var1</span><span class="keyword">, </span><span class="default">$var2</span><span class="keyword">)) {<br />        return </span><span class="default">false</span><span class="keyword">;<br />    }<br /><br />    </span><span class="default">$same </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;<br /><br />    </span><span class="comment">//We now only need to ask for var1 to be an array ;-)<br />    </span><span class="keyword">if(</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$var1</span><span class="keyword">)) {<br />        </span><span class="comment">//Look for an unused index in $var1<br />        </span><span class="keyword">do {<br />            </span><span class="default">$key </span><span class="keyword">= </span><span class="default">uniqid</span><span class="keyword">(</span><span class="string">"is_ref_"</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);<br />        } while(</span><span class="default">array_key_exists</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">, </span><span class="default">$var1</span><span class="keyword">));<br /><br />        </span><span class="comment">//The two variables differ in content ... They can't be the same<br />        </span><span class="keyword">if(</span><span class="default">array_key_exists</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">, </span><span class="default">$var2</span><span class="keyword">)) {<br />            return </span><span class="default">false</span><span class="keyword">;<br />        }<br /><br />        </span><span class="comment">//The arrays point to the same data if changes are reflected in $var2<br />        </span><span class="default">$data </span><span class="keyword">= </span><span class="default">uniqid</span><span class="keyword">(</span><span class="string">"is_ref_data_"</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);<br />        </span><span class="default">$var1</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">] =&amp; </span><span class="default">$data</span><span class="keyword">;<br />        </span><span class="comment">//There seems to be a modification ...<br />        </span><span class="keyword">if(</span><span class="default">array_key_exists</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">, </span><span class="default">$var2</span><span class="keyword">)) {<br />            if(</span><span class="default">$var2</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">] === </span><span class="default">$data</span><span class="keyword">) {<br />                </span><span class="default">$same </span><span class="keyword">= </span><span class="default">true</span><span class="keyword">;<br />            }<br />        }<br /><br />        </span><span class="comment">//Undo our changes ...<br />        </span><span class="keyword">unset(</span><span class="default">$var1</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">]);<br />    } elseif(</span><span class="default">is_object</span><span class="keyword">(</span><span class="default">$var1</span><span class="keyword">)) {<br />        </span><span class="comment">//The same objects are required to have equal class names ;-)<br />        </span><span class="keyword">if(</span><span class="default">get_class</span><span class="keyword">(</span><span class="default">$var1</span><span class="keyword">) !== </span><span class="default">get_class</span><span class="keyword">(</span><span class="default">$var2</span><span class="keyword">)) {<br />            return </span><span class="default">false</span><span class="keyword">;<br />        }<br /><br />        </span><span class="default">$obj1 </span><span class="keyword">= </span><span class="default">array_keys</span><span class="keyword">(</span><span class="default">get_object_vars</span><span class="keyword">(</span><span class="default">$var1</span><span class="keyword">));<br />        </span><span class="default">$obj2 </span><span class="keyword">= </span><span class="default">array_keys</span><span class="keyword">(</span><span class="default">get_object_vars</span><span class="keyword">(</span><span class="default">$var2</span><span class="keyword">));<br /><br />        </span><span class="comment">//Look for an unused index in $var1<br />        </span><span class="keyword">do {<br />            </span><span class="default">$key </span><span class="keyword">= </span><span class="default">uniqid</span><span class="keyword">(</span><span class="string">"is_ref_"</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);<br />        } while(</span><span class="default">in_array</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">, </span><span class="default">$obj1</span><span class="keyword">));<br /><br />        </span><span class="comment">//The two variables differ in content ... They can't be the same<br />        </span><span class="keyword">if(</span><span class="default">in_array</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">, </span><span class="default">$obj2</span><span class="keyword">)) {<br />            return </span><span class="default">false</span><span class="keyword">;<br />        }<br /><br />        </span><span class="comment">//The arrays point to the same data if changes are reflected in $var2<br />        </span><span class="default">$data </span><span class="keyword">= </span><span class="default">uniqid</span><span class="keyword">(</span><span class="string">"is_ref_data_"</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);<br />        </span><span class="default">$var1</span><span class="keyword">-&gt;</span><span class="default">$key </span><span class="keyword">=&amp; </span><span class="default">$data</span><span class="keyword">;<br />        </span><span class="comment">//There seems to be a modification ...<br />        </span><span class="keyword">if(isset(</span><span class="default">$var2</span><span class="keyword">-&gt;</span><span class="default">$key</span><span class="keyword">)) {<br />            if(</span><span class="default">$var2</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">] === </span><span class="default">$data</span><span class="keyword">) {<br />                </span><span class="default">$same </span><span class="keyword">= </span><span class="default">true</span><span class="keyword">;<br />            }<br />        }<br /><br />        </span><span class="comment">//Undo our changes ...<br />        </span><span class="keyword">unset(</span><span class="default">$var1</span><span class="keyword">-&gt;</span><span class="default">$key</span><span class="keyword">);<br />    } elseif (</span><span class="default">is_resource</span><span class="keyword">(</span><span class="default">$var1</span><span class="keyword">)) {<br />        if(</span><span class="default">get_resource_type</span><span class="keyword">(</span><span class="default">$var1</span><span class="keyword">) !== </span><span class="default">get_resource_type</span><span class="keyword">(</span><span class="default">$var2</span><span class="keyword">)) {<br />            return </span><span class="default">false</span><span class="keyword">;<br />        }<br /><br />        return ((string) </span><span class="default">$var1</span><span class="keyword">) === ((string) </span><span class="default">$var2</span><span class="keyword">);<br />    } else {<br />        </span><span class="comment">//Simple variables ...<br />        </span><span class="keyword">if(</span><span class="default">$var1</span><span class="keyword">!==</span><span class="default">$var2</span><span class="keyword">) {<br />            </span><span class="comment">//Data mismatch ... They can't be the same ...<br />            </span><span class="keyword">return </span><span class="default">false</span><span class="keyword">;<br />        }<br /><br />        </span><span class="comment">//To check for a reference of a variable with simple type<br />        //simply store its old value and check against modifications of the second variable ;-)<br /><br />        </span><span class="keyword">do {<br />            </span><span class="default">$key </span><span class="keyword">= </span><span class="default">uniqid</span><span class="keyword">(</span><span class="string">"is_ref_"</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);<br />        } while(</span><span class="default">$key </span><span class="keyword">=== </span><span class="default">$var1</span><span class="keyword">);<br /><br />        </span><span class="default">$tmp </span><span class="keyword">= </span><span class="default">$var1</span><span class="keyword">; </span><span class="comment">//WE NEED A COPY HERE!!!<br />        </span><span class="default">$var1 </span><span class="keyword">= </span><span class="default">$key</span><span class="keyword">; </span><span class="comment">//Set var1 to the value of $key (copy)<br />        </span><span class="default">$same </span><span class="keyword">= </span><span class="default">$var1 </span><span class="keyword">=== </span><span class="default">$var2</span><span class="keyword">; </span><span class="comment">//Check if $var2 was modified too ...<br />        </span><span class="default">$var1 </span><span class="keyword">= </span><span class="default">$tmp</span><span class="keyword">; </span><span class="comment">//Undo our changes ...<br />    </span><span class="keyword">}<br /><br />    return </span><span class="default">$same</span><span class="keyword">;<br />}<br /><br /></span><span class="default">?&gt;<br /></span><br />Although this implementation is quite complete, it can't handle function references and some other minor stuff ATM.<br />This function is especially useful if you want to serialize a recursive array by hand.<br /><br />The usage is something like:<br /><span class="default">&lt;?php<br />$a </span><span class="keyword">= </span><span class="default">5</span><span class="keyword">;<br /></span><span class="default">$b </span><span class="keyword">= </span><span class="default">5</span><span class="keyword">;<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">is_ref</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">, </span><span class="default">$b</span><span class="keyword">)); </span><span class="comment">//false<br /><br /></span><span class="default">$a </span><span class="keyword">= </span><span class="default">5</span><span class="keyword">;<br /></span><span class="default">$b </span><span class="keyword">= </span><span class="default">$a</span><span class="keyword">;<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">is_ref</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">, </span><span class="default">$b</span><span class="keyword">)); </span><span class="comment">//false<br /><br /></span><span class="default">$a </span><span class="keyword">= </span><span class="default">5</span><span class="keyword">;<br /></span><span class="default">$b </span><span class="keyword">=&amp; </span><span class="default">$a</span><span class="keyword">;<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">is_ref</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">, </span><span class="default">$b</span><span class="keyword">)); </span><span class="comment">//true<br /></span><span class="keyword">echo </span><span class="string">"---\n"</span><span class="keyword">;<br /><br /></span><span class="default">$a </span><span class="keyword">= array();<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">is_ref</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">, </span><span class="default">$a</span><span class="keyword">)); </span><span class="comment">//true<br /><br /></span><span class="default">$a</span><span class="keyword">[] =&amp; </span><span class="default">$a</span><span class="keyword">;<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">is_ref</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">, </span><span class="default">$a</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">])); </span><span class="comment">// true<br /></span><span class="keyword">echo </span><span class="string">"---\n"</span><span class="keyword">;<br /><br /></span><span class="default">$b </span><span class="keyword">= array(array());<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">is_ref</span><span class="keyword">(</span><span class="default">$b</span><span class="keyword">, </span><span class="default">$b</span><span class="keyword">)); </span><span class="comment">//true<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">is_ref</span><span class="keyword">(</span><span class="default">$b</span><span class="keyword">, </span><span class="default">$b</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">])); </span><span class="comment">//false<br /></span><span class="keyword">echo </span><span class="string">"---\n"</span><span class="keyword">;<br /><br /></span><span class="default">$b </span><span class="keyword">= array();<br /></span><span class="default">$b</span><span class="keyword">[] = </span><span class="default">$b</span><span class="keyword">;<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">is_ref</span><span class="keyword">(</span><span class="default">$b</span><span class="keyword">, </span><span class="default">$b</span><span class="keyword">)); </span><span class="comment">//true<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">is_ref</span><span class="keyword">(</span><span class="default">$b</span><span class="keyword">, </span><span class="default">$b</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">])); </span><span class="comment">//false<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">is_ref</span><span class="keyword">(</span><span class="default">$b</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">], </span><span class="default">$b</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">][</span><span class="default">0</span><span class="keyword">])); </span><span class="comment">//true*<br /></span><span class="keyword">echo </span><span class="string">"---\n"</span><span class="keyword">;<br /><br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">);<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$b</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;<br /></span><br />* Please note the internal behaviour of PHP that seems to do the reference assignment BEFORE actually copying the variable!!! Thus you get an array containing a (different) recursive array for the last testcase, instead of an array containing an empty array as you could expect.<br /><br />BenBE.</span></code></div>
  </div>
 </div>
  <div class="note" id="62405">  <div class="votes">
    <div id="Vu62405">
    <a href="/manual/vote-note.php?id=62405&amp;page=language.references.spot&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd62405">
    <a href="/manual/vote-note.php?id=62405&amp;page=language.references.spot&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V62405" title="73% like this...">
    7
    </div>
  </div>
  <a href="#62405" class="name">
  <strong class="user"><em>ludvig dot ericson at gmail dot com</em></strong></a><a class="genanchor" href="#62405"> &para;</a><div class="date" title="2006-02-27 03:36"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom62405">
<div class="phpcode"><code><span class="html">For the sake of clarity:<br /><br />$this is a PSEUDO VARIABLE - thus not a real variable. ZE treats is in other ways then normal variables, and that means that some advanced variable-things won't work on it (for obvious reasons):<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">Test </span><span class="keyword">{<br />    var </span><span class="default">$monkeys </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />    <br />    function </span><span class="default">doFoobar</span><span class="keyword">() {<br />        </span><span class="default">$var </span><span class="keyword">= </span><span class="string">"this"</span><span class="keyword">;<br />        $</span><span class="default">$var</span><span class="keyword">-&gt;</span><span class="default">monkeys</span><span class="keyword">++; </span><span class="comment">// Will fail on this line.<br />    </span><span class="keyword">}<br />}<br /><br /></span><span class="default">$obj </span><span class="keyword">= new </span><span class="default">Test</span><span class="keyword">;<br /></span><span class="default">$obj</span><span class="keyword">-&gt;</span><span class="default">doFoobar</span><span class="keyword">(); </span><span class="comment">// Will fail in this call.<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$obj</span><span class="keyword">-&gt;</span><span class="default">monkeys</span><span class="keyword">); </span><span class="comment">// Will return int(0) if it even reaches here.<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="61744">  <div class="votes">
    <div id="Vu61744">
    <a href="/manual/vote-note.php?id=61744&amp;page=language.references.spot&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd61744">
    <a href="/manual/vote-note.php?id=61744&amp;page=language.references.spot&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V61744" title="66% like this...">
    3
    </div>
  </div>
  <a href="#61744" class="name">
  <strong class="user"><em>ksamvel at gmail dot com</em></strong></a><a class="genanchor" href="#61744"> &para;</a><div class="date" title="2006-02-10 09:02"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom61744">
<div class="phpcode"><code><span class="html">One may check reference to any object by simple operator==( object). Example:
<br />
<br /><span class="default">&lt;?php
<br />  </span><span class="keyword">class </span><span class="default">A </span><span class="keyword">{}
<br />
<br />  </span><span class="default">$oA1 </span><span class="keyword">= new </span><span class="default">A</span><span class="keyword">();
<br />
<br />  </span><span class="default">$roA </span><span class="keyword">= &amp; </span><span class="default">$oA1</span><span class="keyword">;
<br />
<br />  echo </span><span class="string">"roA and oA1 are " </span><span class="keyword">. ( </span><span class="default">$roA </span><span class="keyword">== </span><span class="default">$oA1 </span><span class="keyword">? </span><span class="string">"same" </span><span class="keyword">: </span><span class="string">"not same"</span><span class="keyword">) . </span><span class="string">"&lt;br&gt;"</span><span class="keyword">;
<br />
<br />  </span><span class="default">$oA2 </span><span class="keyword">= new </span><span class="default">A</span><span class="keyword">();
<br />  </span><span class="default">$roA </span><span class="keyword">= &amp; </span><span class="default">$roA2</span><span class="keyword">;
<br />
<br />  echo </span><span class="string">"roA and oA1 are " </span><span class="keyword">. ( </span><span class="default">$roA </span><span class="keyword">== </span><span class="default">$oA1 </span><span class="keyword">? </span><span class="string">"same" </span><span class="keyword">: </span><span class="string">"not same"</span><span class="keyword">) . </span><span class="string">"&lt;br&gt;"</span><span class="keyword">;
<br /></span><span class="default">?&gt;
<br /></span>
<br />Output:
<br />
<br />roA and oA1 are same
<br />roA and oA1 are not same
<br />
<br />Current technique might be useful for caching in objects when inheritance is used and only base part of extended class should be copied (analog of C++: oB = oA):
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">class </span><span class="default">A </span><span class="keyword">{ 
<br />  </span><span class="comment">/* Any function changing state of A should set $bChanged to true */
<br />  </span><span class="keyword">public function </span><span class="default">isChanged</span><span class="keyword">() { return </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">bChanged</span><span class="keyword">; }
<br />  private </span><span class="default">$bChanged</span><span class="keyword">;
<br />  </span><span class="comment">//...
<br /></span><span class="keyword">}
<br />
<br />class </span><span class="default">B </span><span class="keyword">extends </span><span class="default">A </span><span class="keyword">{
<br /></span><span class="comment">// ...
<br />  </span><span class="keyword">public function </span><span class="default">set</span><span class="keyword">( &amp;</span><span class="default">$roObj</span><span class="keyword">) {
<br />    if( </span><span class="default">$roObj </span><span class="keyword">instanceof </span><span class="default">A</span><span class="keyword">) {
<br />      if( </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">roAObj </span><span class="keyword">== </span><span class="default">$roObj </span><span class="keyword">&amp;&amp;
<br />          </span><span class="default">$roObj</span><span class="keyword">-&gt;</span><span class="default">isChanged</span><span class="keyword">()) {
<br />        </span><span class="comment">/* Object was not changed do not need to copy A part of B */
<br />      </span><span class="keyword">} else {
<br />        </span><span class="comment">/* Copy A part of B */
<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">roAObj </span><span class="keyword">= &amp;</span><span class="default">$roObj</span><span class="keyword">;
<br />      }
<br />    }
<br />  }
<br />
<br />  private </span><span class="default">$roAObj</span><span class="keyword">;
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="55689">  <div class="votes">
    <div id="Vu55689">
    <a href="/manual/vote-note.php?id=55689&amp;page=language.references.spot&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd55689">
    <a href="/manual/vote-note.php?id=55689&amp;page=language.references.spot&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V55689" title="63% like this...">
    3
    </div>
  </div>
  <a href="#55689" class="name">
  <strong class="user"><em>Sergio Santana: ssantana at tlaloc dot imta dot mx</em></strong></a><a class="genanchor" href="#55689"> &para;</a><div class="date" title="2005-08-10 09:30"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom55689">
<div class="phpcode"><code><span class="html">Sometimes an object's method returning a reference to itself is required. Here is a way to code it:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">MyClass </span><span class="keyword">{<br />  public </span><span class="default">$datum</span><span class="keyword">;<br />  public </span><span class="default">$other</span><span class="keyword">;<br />  <br />  function &amp;</span><span class="default">MyRef</span><span class="keyword">(</span><span class="default">$d</span><span class="keyword">) { </span><span class="comment">// the method<br />    </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">datum </span><span class="keyword">= </span><span class="default">$d</span><span class="keyword">;<br />    return </span><span class="default">$this</span><span class="keyword">; </span><span class="comment">// returns the reference<br />  </span><span class="keyword">}<br />}<br /><br /></span><span class="default">$a </span><span class="keyword">= new </span><span class="default">MyClass</span><span class="keyword">;<br /></span><span class="default">$b </span><span class="keyword">= </span><span class="default">$a</span><span class="keyword">-&gt;</span><span class="default">MyRef</span><span class="keyword">(</span><span class="default">25</span><span class="keyword">); </span><span class="comment">// creates the reference<br /><br /></span><span class="keyword">echo </span><span class="string">"This is object \$a: \n"</span><span class="keyword">;<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">);<br />echo </span><span class="string">"This is object \$b: \n"</span><span class="keyword">;<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$b</span><span class="keyword">);<br /><br /></span><span class="default">$b</span><span class="keyword">-&gt;</span><span class="default">other </span><span class="keyword">= </span><span class="default">50</span><span class="keyword">;<br /><br />echo </span><span class="string">"This is object \$a, modified" </span><span class="keyword">.<br />     </span><span class="string">" indirectly by modifying ref \$b: \n"</span><span class="keyword">;<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />This code outputs:<br />This is object $a:<br />MyClass Object<br />(<br />    [datum] =&gt; 25<br />    [other] =&gt;<br />)<br />This is object $b:<br />MyClass Object<br />(<br />    [datum] =&gt; 25<br />    [other] =&gt;<br />)<br />This is object $a, modified indirectly by modifying ref $b:<br />MyClass Object<br />(<br />    [datum] =&gt; 25<br />    [other] =&gt; 50<br />)</span></code></div>
  </div>
 </div>
  <div class="note" id="59820">  <div class="votes">
    <div id="Vu59820">
    <a href="/manual/vote-note.php?id=59820&amp;page=language.references.spot&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd59820">
    <a href="/manual/vote-note.php?id=59820&amp;page=language.references.spot&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V59820" title="55% like this...">
    1
    </div>
  </div>
  <a href="#59820" class="name">
  <strong class="user"><em>Sergio Santana: ssantana at tlaloc dot imta dot mx</em></strong></a><a class="genanchor" href="#59820"> &para;</a><div class="date" title="2005-12-16 08:41"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom59820">
<div class="phpcode"><code><span class="html">*** WARNING about OBJECTS TRICKY REFERENCES ***<br />-----------------------------------------------<br />The use of references in the context of classes<br />and objects, though well defined in the documentation,<br />is somehow tricky, so one must be very careful when<br />using objects. Let's examine the following two<br />examples:<br /><br /><span class="default">&lt;?php<br />  </span><span class="keyword">class </span><span class="default">y </span><span class="keyword">{<br />    public </span><span class="default">$d</span><span class="keyword">;<br />  }<br />  <br />  </span><span class="default">$A </span><span class="keyword">= new </span><span class="default">y</span><span class="keyword">;<br />  </span><span class="default">$A</span><span class="keyword">-&gt;</span><span class="default">d </span><span class="keyword">= </span><span class="default">18</span><span class="keyword">;<br />  echo </span><span class="string">"Object \$A before operation:\n"</span><span class="keyword">;<br />  </span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$A</span><span class="keyword">);<br />  <br />  </span><span class="default">$B </span><span class="keyword">= </span><span class="default">$A</span><span class="keyword">; </span><span class="comment">// This is not an explicit (=&amp;) reference assignment,<br />           // however, $A and $B refer to the same instance <br />           // though they are not equivalent names<br />  </span><span class="default">$C </span><span class="keyword">=&amp; </span><span class="default">$A</span><span class="keyword">; </span><span class="comment">// Explicit reference assignment, $A and $C refer to <br />            // the same instance and they have become equivalent<br />            // names of the same instance<br />  <br />  </span><span class="default">$B</span><span class="keyword">-&gt;</span><span class="default">d </span><span class="keyword">= </span><span class="default">1234</span><span class="keyword">;<br /> <br />  echo </span><span class="string">"\nObject \$B after operation:\n"</span><span class="keyword">;<br />  </span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$B</span><span class="keyword">);<br />  echo </span><span class="string">"\nObject \$A implicitly modified after operation:\n"</span><span class="keyword">;<br />  </span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$A</span><span class="keyword">); <br />  echo </span><span class="string">"\nObject \$C implicitly modified after operation:\n"</span><span class="keyword">;<br />  </span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$C</span><span class="keyword">); <br />  <br />  </span><span class="comment">// Let's make $A refer to another instance<br />  </span><span class="default">$A </span><span class="keyword">= new </span><span class="default">y</span><span class="keyword">;<br />  </span><span class="default">$A</span><span class="keyword">-&gt;</span><span class="default">d </span><span class="keyword">= </span><span class="default">25200</span><span class="keyword">;<br />  echo </span><span class="string">"\nObject \$B after \$A modification:\n"</span><span class="keyword">;<br />  </span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$B</span><span class="keyword">); </span><span class="comment">// $B doesn't change<br />  </span><span class="keyword">echo </span><span class="string">"\nObject \$A after \$A modification:\n"</span><span class="keyword">;<br />  </span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$A</span><span class="keyword">); <br />  echo </span><span class="string">"\nObject \$C implicitly modified after \$A modification:\n"</span><span class="keyword">;<br />  </span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$C</span><span class="keyword">); </span><span class="comment">// $C changes as $A changes<br /></span><span class="default">?&gt;<br /></span><br />Thus, note the difference between assignments $X = $Y and $X =&amp; $Y.<br />When $Y is anything but an object instance, the first assignment means<br />that $X will hold an independent copy of $Y, and the second, means that<br />$X and $Y will refer to the same thing, so they are tight together until <br />either $X or $Y is forced to refer to another thing. However, when $Y <br />happens to be an object instance, the semantic of $X = $Y changes and <br />becomes only slightly different to that of $X =&amp; $Y, since in both<br />cases $X and $Y become references to the same object. See what this<br />example outputs:<br /><br />Object $A before operation:<br />object(y)#1 (1) {<br />  ["d"]=&gt;<br />  int(18)<br />}<br /><br />Object $B after operation:<br />object(y)#1 (1) {<br />  ["d"]=&gt;<br />  int(1234)<br />}<br /><br />Object $A implicitly modified after operation:<br />object(y)#1 (1) {<br />  ["d"]=&gt;<br />  int(1234)<br />}<br /><br />Object $C implicitly modified after operation:<br />object(y)#1 (1) {<br />  ["d"]=&gt;<br />  int(1234)<br />}<br /><br />Object $B after $A modification:<br />object(y)#1 (1) {<br />  ["d"]=&gt;<br />  int(1234)<br />}<br /><br />Object $A after $A modification:<br />object(y)#2 (1) {<br />  ["d"]=&gt;<br />  int(25200)<br />}<br /><br />Object $C implicitly modified after $A modification:<br />object(y)#2 (1) {<br />  ["d"]=&gt;<br />  int(25200)<br />}<br /><br />Let's review a SECOND EXAMPLE:<br /><span class="default">&lt;?php<br />  </span><span class="keyword">class </span><span class="default">yy </span><span class="keyword">{<br />    public </span><span class="default">$d</span><span class="keyword">;<br />    function </span><span class="default">yy</span><span class="keyword">(</span><span class="default">$x</span><span class="keyword">) {<br />      </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">d </span><span class="keyword">= </span><span class="default">$x</span><span class="keyword">;<br />    }<br />  }<br /><br />  function </span><span class="default">modify</span><span class="keyword">(</span><span class="default">$v</span><span class="keyword">)<br />  {<br />     </span><span class="default">$v</span><span class="keyword">-&gt;</span><span class="default">d </span><span class="keyword">= </span><span class="default">1225</span><span class="keyword">;<br />  }<br /><br />  </span><span class="default">$A </span><span class="keyword">= new </span><span class="default">yy</span><span class="keyword">(</span><span class="default">3</span><span class="keyword">);<br />  </span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$A</span><span class="keyword">); <br />  </span><span class="default">modify</span><span class="keyword">(</span><span class="default">$A</span><span class="keyword">);<br />  </span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$A</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />Although, in general, a formal argument declared <br />as $v in the function 'modify' shown above, implies<br />that the actual argument $A, passed when calling <br />the function, is not modified, this is not the <br />case when $A is an object instance. See what the<br />example code outputs when executed:<br /><br />object(yy)#3 (1) {<br />  ["d"]=&gt;<br />  int(3)<br />}<br />object(yy)#3 (1) {<br />  ["d"]=&gt;<br />  int(1225)<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="105203">  <div class="votes">
    <div id="Vu105203">
    <a href="/manual/vote-note.php?id=105203&amp;page=language.references.spot&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd105203">
    <a href="/manual/vote-note.php?id=105203&amp;page=language.references.spot&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V105203" title="54% like this...">
    1
    </div>
  </div>
  <a href="#105203" class="name">
  <strong class="user"><em>CodeWorX.ch</em></strong></a><a class="genanchor" href="#105203"> &para;</a><div class="date" title="2011-08-02 01:38"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom105203">
<div class="phpcode"><code><span class="html">here is an unconventional (and not very fast) way of detecting references within arrays:<br /><br /><span class="default">&lt;?php<br /><br />    </span><span class="keyword">function </span><span class="default">is_array_reference </span><span class="keyword">(</span><span class="default">$arr</span><span class="keyword">, </span><span class="default">$key</span><span class="keyword">) {<br />        </span><span class="default">$isRef </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;<br />        </span><span class="default">ob_start</span><span class="keyword">();<br />        </span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$arr</span><span class="keyword">);<br />        if (</span><span class="default">strpos</span><span class="keyword">(</span><span class="default">preg_replace</span><span class="keyword">(</span><span class="string">"/[ \n\r]*/i"</span><span class="keyword">, </span><span class="string">""</span><span class="keyword">, </span><span class="default">preg_replace</span><span class="keyword">(</span><span class="string">"/( ){4,}.*(\n\r)*/i"</span><span class="keyword">, </span><span class="string">""</span><span class="keyword">, </span><span class="default">ob_get_contents</span><span class="keyword">())), </span><span class="string">"[" </span><span class="keyword">. </span><span class="default">$key </span><span class="keyword">. </span><span class="string">"]=&gt;&amp;"</span><span class="keyword">) !== </span><span class="default">false</span><span class="keyword">)<br />            </span><span class="default">$isRef </span><span class="keyword">= </span><span class="default">true</span><span class="keyword">;<br />        </span><span class="default">ob_end_clean</span><span class="keyword">();<br />        return </span><span class="default">$isRef</span><span class="keyword">;<br />    }<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="129380">  <div class="votes">
    <div id="Vu129380">
    <a href="/manual/vote-note.php?id=129380&amp;page=language.references.spot&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129380">
    <a href="/manual/vote-note.php?id=129380&amp;page=language.references.spot&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129380" title="100% like this...">
    1
    </div>
  </div>
  <a href="#129380" class="name">
  <strong class="user"><em>biziclop</em></strong></a><a class="genanchor" href="#129380"> &para;</a><div class="date" title="2024-04-07 05:54"><strong>1 year ago</strong></div>
  <div class="text" id="Hcom129380">
<div class="phpcode"><code><span class="html">Here is another function for checking if two variables refer to each other.<br />The function by BenBE works properly, but it's very long and maybe slow.<br />This is a shorter, faster and hopefully bug-free alternative.<br />Works at least from PHP 4.3.0 to 8.3.4: <a href="https://3v4l.org/5JNSl" rel="nofollow" target="_blank">https://3v4l.org/5JNSl</a><br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">is_same_ref</span><span class="keyword">( &amp; </span><span class="default">$a</span><span class="keyword">, &amp; </span><span class="default">$b </span><span class="keyword">){<br />  </span><span class="comment">// Save original values<br />  </span><span class="default">$ori_a </span><span class="keyword">= </span><span class="default">$a</span><span class="keyword">;<br />  </span><span class="default">$ori_b </span><span class="keyword">= </span><span class="default">$b</span><span class="keyword">;<br />  </span><span class="comment">// Give them different values<br />  </span><span class="default">$a </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">;<br />  </span><span class="default">$b </span><span class="keyword">= </span><span class="default">2</span><span class="keyword">;<br />  </span><span class="comment">// Compare them, if they're equal, they are references to each other<br />  </span><span class="default">$eq </span><span class="keyword">= </span><span class="default">$a </span><span class="keyword">=== </span><span class="default">$b</span><span class="keyword">;<br />  </span><span class="comment">// Restore original values<br />  </span><span class="default">$a </span><span class="keyword">= </span><span class="default">$ori_a</span><span class="keyword">;<br />  </span><span class="default">$b </span><span class="keyword">= </span><span class="default">$ori_b</span><span class="keyword">;<br />  return </span><span class="default">$eq</span><span class="keyword">;<br />}<br /><br /></span><span class="default">$a </span><span class="keyword">= array(</span><span class="default">1</span><span class="keyword">,</span><span class="default">2</span><span class="keyword">);<br /></span><span class="default">$b </span><span class="keyword">=&amp; </span><span class="default">$a</span><span class="keyword">;<br /></span><span class="default">$c </span><span class="keyword">=&amp; </span><span class="default">$a</span><span class="keyword">;  </span><span class="comment">// to check for side effects<br /></span><span class="default">var_dump</span><span class="keyword">( </span><span class="default">is_same_ref</span><span class="keyword">( </span><span class="default">$a</span><span class="keyword">, </span><span class="default">$b </span><span class="keyword">));<br /></span><span class="comment">// bool(true)<br /><br /></span><span class="default">$a</span><span class="keyword">[] = </span><span class="default">3</span><span class="keyword">;<br /></span><span class="default">$b</span><span class="keyword">[] = </span><span class="default">4</span><span class="keyword">;<br /></span><span class="comment">// After juggling our array in various ways inside is_same_ref(),<br />// all three variables still refer to the very same array:<br /></span><span class="default">var_dump</span><span class="keyword">( </span><span class="default">implode</span><span class="keyword">( </span><span class="default">$a </span><span class="keyword">), </span><span class="default">implode</span><span class="keyword">( </span><span class="default">$b </span><span class="keyword">), </span><span class="default">implode</span><span class="keyword">( </span><span class="default">$c </span><span class="keyword">));<br /></span><span class="comment">// string(4) "3456"<br />// string(4) "3456"<br />// string(4) "3456"<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="103660">  <div class="votes">
    <div id="Vu103660">
    <a href="/manual/vote-note.php?id=103660&amp;page=language.references.spot&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd103660">
    <a href="/manual/vote-note.php?id=103660&amp;page=language.references.spot&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V103660" title="46% like this...">
    -1
    </div>
  </div>
  <a href="#103660" class="name">
  <strong class="user"><em>Abimael Rodrguez Coln</em></strong></a><a class="genanchor" href="#103660"> &para;</a><div class="date" title="2011-04-26 11:55"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom103660">
<div class="phpcode"><code><span class="html">This is one way to check if is a reference<br /><span class="default">&lt;?php<br />$a </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">;<br /></span><span class="default">$b </span><span class="keyword">=&amp; </span><span class="default">$a</span><span class="keyword">;<br /></span><span class="default">$c </span><span class="keyword">= </span><span class="default">2</span><span class="keyword">;<br /></span><span class="default">$d </span><span class="keyword">= </span><span class="default">3</span><span class="keyword">;<br /></span><span class="default">$e </span><span class="keyword">= array(</span><span class="default">$a</span><span class="keyword">);<br />function </span><span class="default">is_reference</span><span class="keyword">(</span><span class="default">$var</span><span class="keyword">){<br />    </span><span class="default">$val </span><span class="keyword">= </span><span class="default">$GLOBALS</span><span class="keyword">[</span><span class="default">$var</span><span class="keyword">];<br />    </span><span class="default">$tmpArray </span><span class="keyword">= array();<br />    </span><span class="comment">/**<br />     * Add keys/values without reference<br />     */<br />    </span><span class="keyword">foreach(</span><span class="default">$GLOBALS </span><span class="keyword">as </span><span class="default">$k </span><span class="keyword">=&gt; </span><span class="default">$v</span><span class="keyword">){<br />        if(!</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$v</span><span class="keyword">)){<br />            </span><span class="default">$tmpArray</span><span class="keyword">[</span><span class="default">$k</span><span class="keyword">] = </span><span class="default">$v</span><span class="keyword">;<br />        }<br />    }<br /><br />    </span><span class="comment">/**<br />     * Change value of rest variables<br />     */<br />    </span><span class="keyword">foreach(</span><span class="default">$GLOBALS </span><span class="keyword">as </span><span class="default">$k </span><span class="keyword">=&gt; </span><span class="default">$v</span><span class="keyword">){<br />        if(</span><span class="default">$k </span><span class="keyword">!= </span><span class="string">'GLOBALS'<br />            </span><span class="keyword">&amp;&amp; </span><span class="default">$k </span><span class="keyword">!= </span><span class="string">'_POST'<br />            </span><span class="keyword">&amp;&amp; </span><span class="default">$k </span><span class="keyword">!= </span><span class="string">'_GET'<br />            </span><span class="keyword">&amp;&amp; </span><span class="default">$k </span><span class="keyword">!= </span><span class="string">'_COOKIE'<br />            </span><span class="keyword">&amp;&amp; </span><span class="default">$k </span><span class="keyword">!= </span><span class="string">'_FILES'<br />            </span><span class="keyword">&amp;&amp; </span><span class="default">$k </span><span class="keyword">!= </span><span class="default">$var<br />            </span><span class="keyword">&amp;&amp; !</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$v</span><span class="keyword">)<br />        ){<br />            </span><span class="default">usleep</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">);<br />            </span><span class="default">$GLOBALS</span><span class="keyword">[</span><span class="default">$k</span><span class="keyword">] = </span><span class="default">md5</span><span class="keyword">(</span><span class="default">microtime</span><span class="keyword">());<br />        }<br />    }<br /><br />    </span><span class="default">$bool </span><span class="keyword">= </span><span class="default">$val </span><span class="keyword">!= </span><span class="default">$GLOBALS</span><span class="keyword">[</span><span class="default">$var</span><span class="keyword">];<br /><br />    </span><span class="comment">/**<br />     * Restore defaults values<br />     */<br />    </span><span class="keyword">foreach(</span><span class="default">$tmpArray </span><span class="keyword">as </span><span class="default">$k </span><span class="keyword">=&gt; </span><span class="default">$v</span><span class="keyword">){<br />        </span><span class="default">$GLOBALS</span><span class="keyword">[</span><span class="default">$k</span><span class="keyword">] = </span><span class="default">$v</span><span class="keyword">;<br />    }<br /><br />    return </span><span class="default">$bool</span><span class="keyword">;<br />}<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">is_reference</span><span class="keyword">(</span><span class="string">'a'</span><span class="keyword">));<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">is_reference</span><span class="keyword">(</span><span class="string">'b'</span><span class="keyword">));<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">is_reference</span><span class="keyword">(</span><span class="string">'c'</span><span class="keyword">));<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">is_reference</span><span class="keyword">(</span><span class="string">'d'</span><span class="keyword">));<br /></span><span class="default">?&gt;<br /></span><br />This won't check if reference is inside a array.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=language.references.spot&amp;repo=en&amp;redirect=https://www.php.net/manual/en/language.references.spot.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="language.references.php">References Explained</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="language.references.whatare.php" title="What References Are">What References Are</a>
                        </li>
                                                <li class="">
                            <a href="language.references.whatdo.php" title="What References Do">What References Do</a>
                        </li>
                                                <li class="">
                            <a href="language.references.arent.php" title="What References Are Not">What References Are Not</a>
                        </li>
                                                <li class="">
                            <a href="language.references.pass.php" title="Passing by Reference">Passing by Reference</a>
                        </li>
                                                <li class="">
                            <a href="language.references.return.php" title="Returning References">Returning References</a>
                        </li>
                                                <li class="">
                            <a href="language.references.unset.php" title="Unsetting References">Unsetting References</a>
                        </li>
                                                <li class="current">
                            <a href="language.references.spot.php" title="Spotting References">Spotting References</a>
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
