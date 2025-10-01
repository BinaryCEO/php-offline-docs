<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Mailparse Functions - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/ref.mailparse.php">
 <link rel="shorturl" href="https://www.php.net/mailparse">
 <link rel="alternate" href="https://www.php.net/mailparse" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.mailparse.php">
 <link rel="prev" href="https://www.php.net/manual/en/mailparse.constants.php">
 <link rel="next" href="https://www.php.net/manual/en/function.mailparse-determine-best-xfer-encoding.php">

 <link rel="alternate" href="https://www.php.net/manual/en/ref.mailparse.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/ref.mailparse.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/ref.mailparse.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/ref.mailparse.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/ref.mailparse.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/ref.mailparse.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/ref.mailparse.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/ref.mailparse.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/ref.mailparse.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/ref.mailparse.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/ref.mailparse.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Mailparse Functions" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Mailparse Functions - Manual" />
<meta name="twitter:description" content="Mailparse Functions" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Mailparse Functions - Manual" />
<meta itemprop="description" content="Mailparse Functions" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Mailparse Functions" />

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
        <a href="function.mailparse-determine-best-xfer-encoding.php">
          mailparse_determine_best_xfer_encoding &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="mailparse.constants.php">
          &laquo; Predefined Constants        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.remote.mail.php'>Mail Related Extensions</a></li>      <li><a href='book.mailparse.php'>Mailparse</a></li>      </ul>
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
            <option value='en/ref.mailparse.php' selected="selected">English</option>
            <option value='de/ref.mailparse.php'>German</option>
            <option value='es/ref.mailparse.php'>Spanish</option>
            <option value='fr/ref.mailparse.php'>French</option>
            <option value='it/ref.mailparse.php'>Italian</option>
            <option value='ja/ref.mailparse.php'>Japanese</option>
            <option value='pt_BR/ref.mailparse.php'>Brazilian Portuguese</option>
            <option value='ru/ref.mailparse.php'>Russian</option>
            <option value='tr/ref.mailparse.php'>Turkish</option>
            <option value='uk/ref.mailparse.php'>Ukrainian</option>
            <option value='zh/ref.mailparse.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="ref.mailparse" class="reference">
  <h1 class="title">Mailparse Functions</h1>






















































































 <h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="function.mailparse-determine-best-xfer-encoding.php">mailparse_determine_best_xfer_encoding</a> — Gets the best way of encoding</li><li><a href="function.mailparse-msg-create.php">mailparse_msg_create</a> — Create a mime mail resource</li><li><a href="function.mailparse-msg-extract-part.php">mailparse_msg_extract_part</a> — Extracts/decodes a message section</li><li><a href="function.mailparse-msg-extract-part-file.php">mailparse_msg_extract_part_file</a> — Extracts/decodes a message section</li><li><a href="function.mailparse-msg-extract-whole-part-file.php">mailparse_msg_extract_whole_part_file</a> — Extracts a message section including headers without decoding the transfer encoding</li><li><a href="function.mailparse-msg-free.php">mailparse_msg_free</a> — Frees a MIME resource</li><li><a href="function.mailparse-msg-get-part.php">mailparse_msg_get_part</a> — Returns a handle on a given section in a mimemessage</li><li><a href="function.mailparse-msg-get-part-data.php">mailparse_msg_get_part_data</a> — Returns an associative array of info about the message</li><li><a href="function.mailparse-msg-get-structure.php">mailparse_msg_get_structure</a> — Returns an array of mime section names in the supplied message</li><li><a href="function.mailparse-msg-parse.php">mailparse_msg_parse</a> — Incrementally parse data into buffer</li><li><a href="function.mailparse-msg-parse-file.php">mailparse_msg_parse_file</a> — Parses a file</li><li><a href="function.mailparse-rfc822-parse-addresses.php">mailparse_rfc822_parse_addresses</a> — Parse RFC 822 compliant addresses</li><li><a href="function.mailparse-stream-encode.php">mailparse_stream_encode</a> — Streams data from source file pointer, apply encoding and write to destfp</li><li><a href="function.mailparse-uudecode-all.php">mailparse_uudecode_all</a> — Scans the data from fp and extract each embedded uuencoded file</li></ul>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/mailparse/reference.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fref.mailparse%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=ref.mailparse&amp;repo=en&amp;redirect=https://www.php.net/manual/en/ref.mailparse.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">3 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="35727">  <div class="votes">
    <div id="Vu35727">
    <a href="/manual/vote-note.php?id=35727&amp;page=ref.mailparse&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd35727">
    <a href="/manual/vote-note.php?id=35727&amp;page=ref.mailparse&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V35727" title="88% like this...">
    7
    </div>
  </div>
  <a href="#35727" class="name">
  <strong class="user"><em>boris at gamate dot com</em></strong></a><a class="genanchor" href="#35727"> &para;</a><div class="date" title="2003-09-12 06:11"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom35727">
<div class="phpcode"><code><span class="html">Example how to handle mail content from a variable:<br /><br /><span class="default">&lt;?php<br /><br />$buffer </span><span class="keyword">= [...] </span><span class="comment">// Mail Content from pipe or whatever<br /><br /></span><span class="default">$mail </span><span class="keyword">= </span><span class="default">mailparse_msg_create</span><span class="keyword">();<br /></span><span class="default">mailparse_msg_parse</span><span class="keyword">(</span><span class="default">$mail</span><span class="keyword">,</span><span class="default">$buffer</span><span class="keyword">);<br /></span><span class="default">$struct </span><span class="keyword">= </span><span class="default">mailparse_msg_get_structure</span><span class="keyword">(</span><span class="default">$mail</span><span class="keyword">); <br /><br />foreach(</span><span class="default">$struct </span><span class="keyword">as </span><span class="default">$st</span><span class="keyword">) { <br />    </span><span class="default">$section </span><span class="keyword">= </span><span class="default">mailparse_msg_get_part</span><span class="keyword">(</span><span class="default">$mail</span><span class="keyword">, </span><span class="default">$st</span><span class="keyword">); <br />    </span><span class="default">$info </span><span class="keyword">= </span><span class="default">mailparse_msg_get_part_data</span><span class="keyword">(</span><span class="default">$section</span><span class="keyword">); <br />    <br />    </span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$info</span><span class="keyword">);<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="23081">  <div class="votes">
    <div id="Vu23081">
    <a href="/manual/vote-note.php?id=23081&amp;page=ref.mailparse&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd23081">
    <a href="/manual/vote-note.php?id=23081&amp;page=ref.mailparse&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V23081" title="66% like this...">
    4
    </div>
  </div>
  <a href="#23081" class="name">
  <strong class="user"><em>wberrier at yahoo dot com</em></strong></a><a class="genanchor" href="#23081"> &para;</a><div class="date" title="2002-07-09 12:45"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom23081">
<div class="phpcode"><code><span class="html">[Authors note:
<br />The tarball for 4.2.x can be found here:
<br /><a href="http://thebrainroom.com/opensource/php/mailparse.php" rel="nofollow" target="_blank">http://thebrainroom.com/opensource/php/mailparse.php</a>
<br />and contains a script called try.php that demonstrates the usage of these functions.
<br />]
<br />
<br />I've pasted the contents of the file below:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="comment">/*
<br /> * This is a simple email viewer.
<br /> * make sure that $filename points to a file containing an email message and
<br /> * load this page in your browser.
<br /> * You will be able to choose a part to view.
<br /> * */
<br />
<br /></span><span class="default">$filename </span><span class="keyword">= </span><span class="string">"uumsg"</span><span class="keyword">;
<br />
<br /></span><span class="comment">/* parse the message and return a mime message resource */
<br /></span><span class="default">$mime </span><span class="keyword">= </span><span class="default">mailparse_msg_parse_file</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">);
<br /></span><span class="comment">/* return an array of message parts - this contsists of the names of the parts
<br /> * only */
<br /></span><span class="default">$struct </span><span class="keyword">= </span><span class="default">mailparse_msg_get_structure</span><span class="keyword">(</span><span class="default">$mime</span><span class="keyword">);
<br />
<br />echo </span><span class="string">"&lt;table&gt;\n"</span><span class="keyword">;
<br /></span><span class="comment">/* print a choice of sections */
<br /></span><span class="keyword">foreach(</span><span class="default">$struct </span><span class="keyword">as </span><span class="default">$st</span><span class="keyword">) {
<br />        echo </span><span class="string">"&lt;tr&gt;\n"</span><span class="keyword">;
<br />        echo </span><span class="string">"&lt;td&gt;&lt;a href=\"</span><span class="default">$PHP_SELF</span><span class="string">?showpart=</span><span class="default">$st</span><span class="string">\"&gt;</span><span class="default">$st</span><span class="string">&lt;/a&gt;&lt;/td&gt;\n"</span><span class="keyword">;
<br />        </span><span class="comment">/* get a handle on the message resource for a subsection */
<br />        </span><span class="default">$section </span><span class="keyword">= </span><span class="default">mailparse_msg_get_part</span><span class="keyword">(</span><span class="default">$mime</span><span class="keyword">, </span><span class="default">$st</span><span class="keyword">);
<br />        </span><span class="comment">/* get content-type, encoding and header information for that section */
<br />        </span><span class="default">$info </span><span class="keyword">= </span><span class="default">mailparse_msg_get_part_data</span><span class="keyword">(</span><span class="default">$section</span><span class="keyword">);
<br />        echo </span><span class="string">"\n"</span><span class="keyword">;
<br />        echo </span><span class="string">"&lt;td&gt;" </span><span class="keyword">. </span><span class="default">$info</span><span class="keyword">[</span><span class="string">"content-type"</span><span class="keyword">] . </span><span class="string">"&lt;/td&gt;\n"</span><span class="keyword">;
<br />        echo </span><span class="string">"&lt;td&gt;" </span><span class="keyword">. </span><span class="default">$info</span><span class="keyword">[</span><span class="string">"content-disposition"</span><span class="keyword">] . </span><span class="string">"&lt;/td&gt;\n"</span><span class="keyword">;
<br />        echo </span><span class="string">"&lt;td&gt;" </span><span class="keyword">. </span><span class="default">$info</span><span class="keyword">[</span><span class="string">"disposition-filename"</span><span class="keyword">] . </span><span class="string">"&lt;/td&gt;\n"</span><span class="keyword">;
<br />        echo </span><span class="string">"&lt;td&gt;" </span><span class="keyword">. </span><span class="default">$info</span><span class="keyword">[</span><span class="string">"charset"</span><span class="keyword">] . </span><span class="string">"&lt;/td&gt;\n"</span><span class="keyword">;
<br />        echo </span><span class="string">"&lt;/tr&gt;"</span><span class="keyword">;
<br />}
<br />echo </span><span class="string">"&lt;/table&gt;"</span><span class="keyword">;
<br />
<br /></span><span class="comment">/* if we were called to display a part, do so now */
<br /></span><span class="keyword">if (</span><span class="default">$showpart</span><span class="keyword">)  {
<br />        </span><span class="comment">/* get a handle on the message resource for the desired part */
<br />        </span><span class="default">$sec </span><span class="keyword">= </span><span class="default">mailparse_msg_get_part</span><span class="keyword">(</span><span class="default">$mime</span><span class="keyword">, </span><span class="default">$showpart</span><span class="keyword">);
<br />
<br />        echo </span><span class="string">"&lt;table border=1&gt;&lt;tr&gt;&lt;th&gt;Section </span><span class="default">$showpart</span><span class="string">&lt;/th&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;"</span><span class="keyword">;
<br />        </span><span class="default">ob_start</span><span class="keyword">();
<br />        </span><span class="comment">/* extract the part from the message file and dump it to the output buff
<br />er
<br />         * */
<br />        </span><span class="default">mailparse_msg_extract_part_file</span><span class="keyword">(</span><span class="default">$sec</span><span class="keyword">, </span><span class="default">$filename</span><span class="keyword">);
<br />        </span><span class="default">$contents </span><span class="keyword">= </span><span class="default">ob_get_contents</span><span class="keyword">();
<br />        </span><span class="default">ob_end_clean</span><span class="keyword">();
<br />        </span><span class="comment">/* quote the message for safe display in a browser */
<br />        </span><span class="keyword">echo </span><span class="default">nl2br</span><span class="keyword">(</span><span class="default">htmlentities</span><span class="keyword">(</span><span class="default">$contents</span><span class="keyword">)) . </span><span class="string">"&lt;/td&gt;&lt;/tr&gt;&lt;/table&gt;"</span><span class="keyword">;;
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="42563">  <div class="votes">
    <div id="Vu42563">
    <a href="/manual/vote-note.php?id=42563&amp;page=ref.mailparse&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd42563">
    <a href="/manual/vote-note.php?id=42563&amp;page=ref.mailparse&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V42563" title="61% like this...">
    3
    </div>
  </div>
  <a href="#42563" class="name">
  <strong class="user"><em>iwarner at triangle-solutions dot com</em></strong></a><a class="genanchor" href="#42563"> &para;</a><div class="date" title="2004-05-21 08:31"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom42563">
<div class="phpcode"><code><span class="html">Also dont forget to LOAD mbstring before you load mailparse<br /><br />example in the php.ini place in this order:<br /><br />extension=php_mbstring.dll<br />extension=php_mailparse.dll<br /><br />Or you will get an error.<br /><br />Ian</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=ref.mailparse&amp;repo=en&amp;redirect=https://www.php.net/manual/en/ref.mailparse.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="book.mailparse.php">Mailparse</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="intro.mailparse.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="mailparse.setup.php" title="Installing/Configuring">Installing/Configuring</a>
                        </li>
                                                <li class="">
                            <a href="mailparse.constants.php" title="Predefined Constants">Predefined Constants</a>
                        </li>
                                                <li class="current">
                            <a href="ref.mailparse.php" title="Mailparse Functions">Mailparse Functions</a>
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
