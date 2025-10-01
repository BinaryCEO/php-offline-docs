<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: String - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/language.operators.string.php">
 <link rel="shorturl" href="https://www.php.net/operators.string">
 <link rel="alternate" href="https://www.php.net/operators.string" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/language.operators.php">
 <link rel="prev" href="https://www.php.net/manual/en/language.operators.logical.php">
 <link rel="next" href="https://www.php.net/manual/en/language.operators.array.php">

 <link rel="alternate" href="https://www.php.net/manual/en/language.operators.string.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/language.operators.string.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/language.operators.string.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/language.operators.string.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/language.operators.string.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/language.operators.string.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/language.operators.string.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/language.operators.string.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/language.operators.string.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/language.operators.string.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/language.operators.string.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="String Operators" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: String - Manual" />
<meta name="twitter:description" content="String Operators" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: String - Manual" />
<meta itemprop="description" content="String Operators" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="String Operators" />

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
        <a href="language.operators.array.php">
          Array &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="language.operators.logical.php">
          &laquo; Logic        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='langref.php'>Language Reference</a></li>      <li><a href='language.operators.php'>Operators</a></li>      </ul>
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
            <option value='en/language.operators.string.php' selected="selected">English</option>
            <option value='de/language.operators.string.php'>German</option>
            <option value='es/language.operators.string.php'>Spanish</option>
            <option value='fr/language.operators.string.php'>French</option>
            <option value='it/language.operators.string.php'>Italian</option>
            <option value='ja/language.operators.string.php'>Japanese</option>
            <option value='pt_BR/language.operators.string.php'>Brazilian Portuguese</option>
            <option value='ru/language.operators.string.php'>Russian</option>
            <option value='tr/language.operators.string.php'>Turkish</option>
            <option value='uk/language.operators.string.php'>Ukrainian</option>
            <option value='zh/language.operators.string.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="language.operators.string" class="sect1">
 <h2 class="title">String Operators</h2>
 
 <p class="simpara">
  There are two <span class="type"><a href="language.types.string.php" class="type string">string</a></span> operators. The first is the
  concatenation operator (&#039;.&#039;), which returns the concatenation of its
  right and left arguments. The second is the concatenating assignment
  operator (&#039;<code class="literal">.=</code>&#039;), which appends the argument on the right side to
  the argument on the left side. Please read <a href="language.operators.assignment.php" class="link">Assignment
  Operators</a> for more information.
 </p>

 <p class="para">
  <div class="example" id="example-178">
   <p><strong>Example #1 String Concatenating</strong></p>
   <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$a </span><span style="color: #007700">= </span><span style="color: #DD0000">"Hello "</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$b </span><span style="color: #007700">= </span><span style="color: #0000BB">$a </span><span style="color: #007700">. </span><span style="color: #DD0000">"World!"</span><span style="color: #007700">; </span><span style="color: #FF8000">// now $b contains "Hello World!"<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$b</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$a </span><span style="color: #007700">= </span><span style="color: #DD0000">"Hello "</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$a </span><span style="color: #007700">.= </span><span style="color: #DD0000">"World!"</span><span style="color: #007700">;     </span><span style="color: #FF8000">// now $a contains "Hello World!"<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$a</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

  </div>
 </p>

 <div class="sect2">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><a href="language.types.string.php" class="link">String type</a></li>
    <li><a href="ref.strings.php" class="link">String functions</a></li>
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
        <a href="https://github.com/php/doc-en/blob/master/language/operators/string.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Flanguage.operators.string%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=language.operators.string&amp;repo=en&amp;redirect=https://www.php.net/manual/en/language.operators.string.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">6 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="110937">  <div class="votes">
    <div id="Vu110937">
    <a href="/manual/vote-note.php?id=110937&amp;page=language.operators.string&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd110937">
    <a href="/manual/vote-note.php?id=110937&amp;page=language.operators.string&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V110937" title="70% like this...">
    277
    </div>
  </div>
  <a href="#110937" class="name">
  <strong class="user"><em>K.Alex</em></strong></a><a class="genanchor" href="#110937"> &para;</a><div class="date" title="2012-12-26 10:22"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom110937">
<div class="phpcode"><code><span class="html">As for me, curly braces serve good substitution for concatenation, and they are quicker to type and code looks cleaner. Remember to use double quotes (" ") as their content is parced by php, because in single quotes (' ') you'll get litaral name of variable provided:<br /><br /><span class="default">&lt;?php<br /><br /> $a </span><span class="keyword">= </span><span class="string">'12345'</span><span class="keyword">;<br /><br /></span><span class="comment">// This works:<br /> </span><span class="keyword">echo </span><span class="string">"qwe</span><span class="keyword">{</span><span class="default">$a</span><span class="keyword">}</span><span class="string">rty"</span><span class="keyword">; </span><span class="comment">// qwe12345rty, using braces<br /> </span><span class="keyword">echo </span><span class="string">"qwe" </span><span class="keyword">. </span><span class="default">$a </span><span class="keyword">. </span><span class="string">"rty"</span><span class="keyword">; </span><span class="comment">// qwe12345rty, concatenation used<br /><br />// Does not work:<br /> </span><span class="keyword">echo </span><span class="string">'qwe{$a}rty'</span><span class="keyword">; </span><span class="comment">// qwe{$a}rty, single quotes are not parsed<br /> </span><span class="keyword">echo </span><span class="string">"qwe</span><span class="default">$arty</span><span class="string">"</span><span class="keyword">; </span><span class="comment">// qwe, because $a became $arty, which is undefined<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="41950">  <div class="votes">
    <div id="Vu41950">
    <a href="/manual/vote-note.php?id=41950&amp;page=language.operators.string&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd41950">
    <a href="/manual/vote-note.php?id=41950&amp;page=language.operators.string&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V41950" title="61% like this...">
    164
    </div>
  </div>
  <a href="#41950" class="name">
  <strong class="user"><em>anders dot benke at telia dot com</em></strong></a><a class="genanchor" href="#41950"> &para;</a><div class="date" title="2004-04-27 09:53"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom41950">
<div class="phpcode"><code><span class="html">A word of caution - the dot operator has the same precedence as + and -, which can yield unexpected results. <br /><br />Example:<br /><br />&lt;php<br />$var = 3;<br /><br />echo "Result: " . $var + 3;<br />?&gt;<br /><br />The above will print out "3" instead of "Result: 6", since first the string "Result3" is created and this is then added to 3 yielding 3, non-empty non-numeric strings being converted to 0.<br /><br />To print "Result: 6", use parantheses to alter precedence:<br /><br />&lt;php<br />$var = 3;<br /><br />echo "Result: " . ($var + 3); <br />?&gt;</span></code></div>
  </div>
 </div>
  <div class="note" id="60035">  <div class="votes">
    <div id="Vu60035">
    <a href="/manual/vote-note.php?id=60035&amp;page=language.operators.string&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd60035">
    <a href="/manual/vote-note.php?id=60035&amp;page=language.operators.string&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V60035" title="60% like this...">
    114
    </div>
  </div>
  <a href="#60035" class="name">
  <strong class="user"><em>Stephen Clay</em></strong></a><a class="genanchor" href="#60035"> &para;</a><div class="date" title="2005-12-23 07:10"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom60035">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php <br /></span><span class="string">"</span><span class="keyword">{</span><span class="default">$str1</span><span class="keyword">}{</span><span class="default">$str2</span><span class="keyword">}{</span><span class="default">$str3</span><span class="keyword">}</span><span class="string">"</span><span class="keyword">; </span><span class="comment">// one concat = fast<br />  </span><span class="default">$str1</span><span class="keyword">. </span><span class="default">$str2</span><span class="keyword">. </span><span class="default">$str3</span><span class="keyword">;   </span><span class="comment">// two concats = slow<br /></span><span class="default">?&gt;<br /></span>Use double quotes to concat more than two strings instead of multiple '.' operators.  PHP is forced to re-concatenate with every '.' operator.</span></code></div>
  </div>
 </div>
  <div class="note" id="88827">  <div class="votes">
    <div id="Vu88827">
    <a href="/manual/vote-note.php?id=88827&amp;page=language.operators.string&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd88827">
    <a href="/manual/vote-note.php?id=88827&amp;page=language.operators.string&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V88827" title="60% like this...">
    92
    </div>
  </div>
  <a href="#88827" class="name">
  <strong class="user"><em>hexidecimalgadget at hotmail dot com</em></strong></a><a class="genanchor" href="#88827"> &para;</a><div class="date" title="2009-02-09 09:37"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom88827">
<div class="phpcode"><code><span class="html">If you attempt to add numbers with a concatenation operator, your result will be the result of those numbers as strings.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">echo </span><span class="string">"thr"</span><span class="keyword">.</span><span class="string">"ee"</span><span class="keyword">;           </span><span class="comment">//prints the string "three"<br /></span><span class="keyword">echo </span><span class="string">"twe" </span><span class="keyword">. </span><span class="string">"lve"</span><span class="keyword">;        </span><span class="comment">//prints the string "twelve"<br /></span><span class="keyword">echo </span><span class="default">1 </span><span class="keyword">. </span><span class="default">2</span><span class="keyword">;                </span><span class="comment">//prints the string "12"<br /></span><span class="keyword">echo </span><span class="default">1.2</span><span class="keyword">;                  </span><span class="comment">//prints the number 1.2<br /></span><span class="keyword">echo </span><span class="default">1</span><span class="keyword">+</span><span class="default">2</span><span class="keyword">;                  </span><span class="comment">//prints the number 3<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="127624">  <div class="votes">
    <div id="Vu127624">
    <a href="/manual/vote-note.php?id=127624&amp;page=language.operators.string&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd127624">
    <a href="/manual/vote-note.php?id=127624&amp;page=language.operators.string&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V127624" title="65% like this...">
    11
    </div>
  </div>
  <a href="#127624" class="name">
  <strong class="user"><em>biziclop</em></strong></a><a class="genanchor" href="#127624"> &para;</a><div class="date" title="2022-09-14 10:31"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom127624">
<div class="phpcode"><code><span class="html">Some bitwise operators (the and, or, xor and not operators: &amp; | ^ ~ ) also work with strings too since PHP4, so you don't have to loop through strings and do chr(ord($s[i])) like things.<br /><br />See the documentation of the bitwise operators: <a href="https://www.php.net/operators.bitwise" rel="nofollow" target="_blank">https://www.php.net/operators.bitwise</a><br /><br /><span class="default">&lt;?php var_dump</span><span class="keyword">(<br />  (</span><span class="string">'23456787654' </span><span class="keyword">^ </span><span class="string">'zVXYYhoXDYP'</span><span class="keyword">), </span><span class="comment">// 'Hello_World'<br />  </span><span class="keyword">(</span><span class="string">'(!($)^!)@$@' </span><span class="keyword">| </span><span class="string">'@ddhfIvn2H$'</span><span class="keyword">), </span><span class="comment">// 'hello_world'<br />  </span><span class="keyword">(</span><span class="string">'{}~|o!Wo{|}' </span><span class="keyword">&amp; </span><span class="string">'Lgmno|Wovmf'</span><span class="keyword">), </span><span class="comment">// 'Hello World'<br />  </span><span class="keyword">(~</span><span class="string">'&lt;0-14)(98'  </span><span class="keyword">&amp;   </span><span class="string">'}}}}}}}}}'</span><span class="keyword">)  </span><span class="comment">// 'AMPLITUDE'<br /></span><span class="keyword">); </span><span class="default">?&gt;<br /></span><br />Live demo: <a href="https://3v4l.org/MnFeb" rel="nofollow" target="_blank">https://3v4l.org/MnFeb</a></span></code></div>
  </div>
 </div>
  <div class="note" id="85358">  <div class="votes">
    <div id="Vu85358">
    <a href="/manual/vote-note.php?id=85358&amp;page=language.operators.string&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd85358">
    <a href="/manual/vote-note.php?id=85358&amp;page=language.operators.string&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V85358" title="57% like this...">
    44
    </div>
  </div>
  <a href="#85358" class="name">
  <strong class="user"><em>mariusads::at::helpedia.com</em></strong></a><a class="genanchor" href="#85358"> &para;</a><div class="date" title="2008-08-27 02:44"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom85358">
<div class="phpcode"><code><span class="html">Be careful so that you don't type "." instead of ";" at the end of a line.<br /><br />It took me more than 30 minutes to debug a long script because of something like this:<br /><br />&lt;?<br />echo 'a'.<br />$c = 'x';<br />echo 'b';<br />echo 'c';<br />?&gt;<br /><br />The output is "axbc", because of the dot on the first line.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=language.operators.string&amp;repo=en&amp;redirect=https://www.php.net/manual/en/language.operators.string.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="language.operators.php">Operators</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="language.operators.precedence.php" title="Operator Precedence">Operator Precedence</a>
                        </li>
                                                <li class="">
                            <a href="language.operators.arithmetic.php" title="Arithmetic">Arithmetic</a>
                        </li>
                                                <li class="">
                            <a href="language.operators.increment.php" title="Increment and Decrement">Increment and Decrement</a>
                        </li>
                                                <li class="">
                            <a href="language.operators.assignment.php" title="Assignment">Assignment</a>
                        </li>
                                                <li class="">
                            <a href="language.operators.bitwise.php" title="Bitwise">Bitwise</a>
                        </li>
                                                <li class="">
                            <a href="language.operators.comparison.php" title="Comparison">Comparison</a>
                        </li>
                                                <li class="">
                            <a href="language.operators.errorcontrol.php" title="Error Control">Error Control</a>
                        </li>
                                                <li class="">
                            <a href="language.operators.execution.php" title="Execution">Execution</a>
                        </li>
                                                <li class="">
                            <a href="language.operators.logical.php" title="Logic">Logic</a>
                        </li>
                                                <li class="current">
                            <a href="language.operators.string.php" title="String">String</a>
                        </li>
                                                <li class="">
                            <a href="language.operators.array.php" title="Array">Array</a>
                        </li>
                                                <li class="">
                            <a href="language.operators.type.php" title="Type">Type</a>
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
