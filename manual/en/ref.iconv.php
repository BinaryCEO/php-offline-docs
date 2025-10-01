<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: iconv Functions - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/ref.iconv.php">
 <link rel="shorturl" href="https://www.php.net/iconv">
 <link rel="alternate" href="https://www.php.net/iconv" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.iconv.php">
 <link rel="prev" href="https://www.php.net/manual/en/iconv.constants.php">
 <link rel="next" href="https://www.php.net/manual/en/function.iconv.php">

 <link rel="alternate" href="https://www.php.net/manual/en/ref.iconv.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/ref.iconv.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/ref.iconv.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/ref.iconv.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/ref.iconv.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/ref.iconv.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/ref.iconv.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/ref.iconv.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/ref.iconv.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/ref.iconv.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/ref.iconv.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="iconv Functions" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: iconv Functions - Manual" />
<meta name="twitter:description" content="iconv Functions" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: iconv Functions - Manual" />
<meta itemprop="description" content="iconv Functions" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="iconv Functions" />

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
        <a href="function.iconv.php">
          iconv &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="iconv.constants.php">
          &laquo; Predefined Constants        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.international.php'>Human Language and Character Encoding Support</a></li>      <li><a href='book.iconv.php'>iconv</a></li>      </ul>
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
            <option value='en/ref.iconv.php' selected="selected">English</option>
            <option value='de/ref.iconv.php'>German</option>
            <option value='es/ref.iconv.php'>Spanish</option>
            <option value='fr/ref.iconv.php'>French</option>
            <option value='it/ref.iconv.php'>Italian</option>
            <option value='ja/ref.iconv.php'>Japanese</option>
            <option value='pt_BR/ref.iconv.php'>Brazilian Portuguese</option>
            <option value='ru/ref.iconv.php'>Russian</option>
            <option value='tr/ref.iconv.php'>Turkish</option>
            <option value='uk/ref.iconv.php'>Ukrainian</option>
            <option value='zh/ref.iconv.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="ref.iconv" class="reference">
  <h1 class="title">iconv Functions</h1>

  <div class="partintro">
   <h1 class="title">See Also</h1>
   <p class="para">
    See also <a href="ref.recode.php" class="link">GNU Recode functions</a>.
   </p>
  </div>

 
























































 <h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="function.iconv.php">iconv</a> — Convert a string from one character encoding to another</li><li><a href="function.iconv-get-encoding.php">iconv_get_encoding</a> — Retrieve internal configuration variables of iconv extension</li><li><a href="function.iconv-mime-decode.php">iconv_mime_decode</a> — Decodes a MIME header field</li><li><a href="function.iconv-mime-decode-headers.php">iconv_mime_decode_headers</a> — Decodes multiple MIME header fields at once</li><li><a href="function.iconv-mime-encode.php">iconv_mime_encode</a> — Composes a MIME header field</li><li><a href="function.iconv-set-encoding.php">iconv_set_encoding</a> — Set current setting for character encoding conversion</li><li><a href="function.iconv-strlen.php">iconv_strlen</a> — Returns the character count of string</li><li><a href="function.iconv-strpos.php">iconv_strpos</a> — Finds position of first occurrence of a needle within a haystack</li><li><a href="function.iconv-strrpos.php">iconv_strrpos</a> — Finds the last occurrence of a needle within a haystack</li><li><a href="function.iconv-substr.php">iconv_substr</a> — Cut out part of a string</li><li><a href="function.ob-iconv-handler.php">ob_iconv_handler</a> — Convert character encoding as output buffer handler</li></ul>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/iconv/reference.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fref.iconv%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=ref.iconv&amp;repo=en&amp;redirect=https://www.php.net/manual/en/ref.iconv.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">2 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="94143">  <div class="votes">
    <div id="Vu94143">
    <a href="/manual/vote-note.php?id=94143&amp;page=ref.iconv&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd94143">
    <a href="/manual/vote-note.php?id=94143&amp;page=ref.iconv&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V94143" title="53% like this...">
    2
    </div>
  </div>
  <a href="#94143" class="name">
  <strong class="user"><em>Martin Petrov</em></strong></a><a class="genanchor" href="#94143"> &para;</a><div class="date" title="2009-10-19 02:05"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom94143">
<div class="phpcode"><code><span class="html">This is edited functions utf8_to_cp1251 and cp1251_to_utf8. 
<br />Changes: Check current string encoding.
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">cp1251_to_utf8</span><span class="keyword">(</span><span class="default">$s</span><span class="keyword">)
<br />  {
<br />  if ((</span><span class="default">mb_detect_encoding</span><span class="keyword">(</span><span class="default">$s</span><span class="keyword">,</span><span class="string">'UTF-8,CP1251'</span><span class="keyword">)) == </span><span class="string">"WINDOWS-1251"</span><span class="keyword">)
<br />    {
<br />    </span><span class="default">$c209 </span><span class="keyword">= </span><span class="default">chr</span><span class="keyword">(</span><span class="default">209</span><span class="keyword">); </span><span class="default">$c208 </span><span class="keyword">= </span><span class="default">chr</span><span class="keyword">(</span><span class="default">208</span><span class="keyword">); </span><span class="default">$c129 </span><span class="keyword">= </span><span class="default">chr</span><span class="keyword">(</span><span class="default">129</span><span class="keyword">);
<br />    for(</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$s</span><span class="keyword">); </span><span class="default">$i</span><span class="keyword">++)
<br />      {
<br />      </span><span class="default">$c</span><span class="keyword">=</span><span class="default">ord</span><span class="keyword">(</span><span class="default">$s</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]);
<br />      if (</span><span class="default">$c</span><span class="keyword">&gt;=</span><span class="default">192 </span><span class="keyword">and </span><span class="default">$c</span><span class="keyword">&lt;=</span><span class="default">239</span><span class="keyword">) </span><span class="default">$t</span><span class="keyword">.=</span><span class="default">$c208</span><span class="keyword">.</span><span class="default">chr</span><span class="keyword">(</span><span class="default">$c</span><span class="keyword">-</span><span class="default">48</span><span class="keyword">);
<br />      elseif (</span><span class="default">$c</span><span class="keyword">&gt;</span><span class="default">239</span><span class="keyword">) </span><span class="default">$t</span><span class="keyword">.=</span><span class="default">$c209</span><span class="keyword">.</span><span class="default">chr</span><span class="keyword">(</span><span class="default">$c</span><span class="keyword">-</span><span class="default">112</span><span class="keyword">);
<br />      elseif (</span><span class="default">$c</span><span class="keyword">==</span><span class="default">184</span><span class="keyword">) </span><span class="default">$t</span><span class="keyword">.=</span><span class="default">$c209</span><span class="keyword">.</span><span class="default">$c209</span><span class="keyword">;
<br />      elseif (</span><span class="default">$c</span><span class="keyword">==</span><span class="default">168</span><span class="keyword">)    </span><span class="default">$t</span><span class="keyword">.=</span><span class="default">$c208</span><span class="keyword">.</span><span class="default">$c129</span><span class="keyword">;
<br />      else </span><span class="default">$t</span><span class="keyword">.=</span><span class="default">$s</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">];
<br />      }
<br />    return </span><span class="default">$t</span><span class="keyword">;
<br />    }
<br />  else
<br />    {
<br />    return </span><span class="default">$s</span><span class="keyword">;
<br />    }
<br />   }
<br />
<br />function </span><span class="default">utf8_to_cp1251</span><span class="keyword">(</span><span class="default">$s</span><span class="keyword">)
<br />  {
<br />  if ((</span><span class="default">mb_detect_encoding</span><span class="keyword">(</span><span class="default">$s</span><span class="keyword">,</span><span class="string">'UTF-8,CP1251'</span><span class="keyword">)) == </span><span class="string">"UTF-8"</span><span class="keyword">)
<br />    {
<br />    for (</span><span class="default">$c</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;</span><span class="default">$c</span><span class="keyword">&lt;</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$s</span><span class="keyword">);</span><span class="default">$c</span><span class="keyword">++)
<br />      {
<br />      </span><span class="default">$i</span><span class="keyword">=</span><span class="default">ord</span><span class="keyword">(</span><span class="default">$s</span><span class="keyword">[</span><span class="default">$c</span><span class="keyword">]);
<br />      if (</span><span class="default">$i</span><span class="keyword">&lt;=</span><span class="default">127</span><span class="keyword">) </span><span class="default">$out</span><span class="keyword">.=</span><span class="default">$s</span><span class="keyword">[</span><span class="default">$c</span><span class="keyword">];
<br />      if (</span><span class="default">$byte2</span><span class="keyword">)
<br />        {
<br />        </span><span class="default">$new_c2</span><span class="keyword">=(</span><span class="default">$c1</span><span class="keyword">&amp;</span><span class="default">3</span><span class="keyword">)*</span><span class="default">64</span><span class="keyword">+(</span><span class="default">$i</span><span class="keyword">&amp;</span><span class="default">63</span><span class="keyword">);
<br />        </span><span class="default">$new_c1</span><span class="keyword">=(</span><span class="default">$c1</span><span class="keyword">&gt;&gt;</span><span class="default">2</span><span class="keyword">)&amp;</span><span class="default">5</span><span class="keyword">;
<br />        </span><span class="default">$new_i</span><span class="keyword">=</span><span class="default">$new_c1</span><span class="keyword">*</span><span class="default">256</span><span class="keyword">+</span><span class="default">$new_c2</span><span class="keyword">;
<br />        if (</span><span class="default">$new_i</span><span class="keyword">==</span><span class="default">1025</span><span class="keyword">)
<br />          {
<br />          </span><span class="default">$out_i</span><span class="keyword">=</span><span class="default">168</span><span class="keyword">;
<br />          } else {
<br />          if (</span><span class="default">$new_i</span><span class="keyword">==</span><span class="default">1105</span><span class="keyword">)
<br />            {
<br />            </span><span class="default">$out_i</span><span class="keyword">=</span><span class="default">184</span><span class="keyword">;
<br />            } else {
<br />            </span><span class="default">$out_i</span><span class="keyword">=</span><span class="default">$new_i</span><span class="keyword">-</span><span class="default">848</span><span class="keyword">;
<br />            }
<br />          }
<br />        </span><span class="default">$out</span><span class="keyword">.=</span><span class="default">chr</span><span class="keyword">(</span><span class="default">$out_i</span><span class="keyword">);
<br />        </span><span class="default">$byte2</span><span class="keyword">=</span><span class="default">false</span><span class="keyword">;
<br />        }
<br />        if ((</span><span class="default">$i</span><span class="keyword">&gt;&gt;</span><span class="default">5</span><span class="keyword">)==</span><span class="default">6</span><span class="keyword">)
<br />          {
<br />          </span><span class="default">$c1</span><span class="keyword">=</span><span class="default">$i</span><span class="keyword">;
<br />          </span><span class="default">$byte2</span><span class="keyword">=</span><span class="default">true</span><span class="keyword">;
<br />          }
<br />      }
<br />    return </span><span class="default">$out</span><span class="keyword">;
<br />    }
<br />  else
<br />    {
<br />    return </span><span class="default">$s</span><span class="keyword">;
<br />    }
<br />  }
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="68182">  <div class="votes">
    <div id="Vu68182">
    <a href="/manual/vote-note.php?id=68182&amp;page=ref.iconv&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd68182">
    <a href="/manual/vote-note.php?id=68182&amp;page=ref.iconv&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V68182" title="42% like this...">
    -2
    </div>
  </div>
  <a href="#68182" class="name">
  <strong class="user"><em>nod at mobi dot kz</em></strong></a><a class="genanchor" href="#68182"> &para;</a><div class="date" title="2006-07-17 07:17"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom68182">
<div class="phpcode"><code><span class="html">If you need convert string from Windows-1251 to 866. Some characters of 1251 haven't representation on DOS 866. For example, long dash -- chr(150) will be converted to 0, after that iconv finish his work and other charactes  will be skiped. Problem characters range in win1251 (128-159,163,165-167,169,171-174,177-182,187-190).<br /><br />Use this:<br /><br />//$text  -  input text in windows-1251<br />//$cout  -  output text in 866 (cp866, dos ru ascii)<br /><br />for($i=0;$i&lt;strlen($text);$i++) {<br />    $ord=ord($text[$i]);<br />    if($ord&gt;=192&amp;&amp;$ord&lt;=239) $cout.=chr($ord-64);<br />    elseif($ord&gt;=240&amp;&amp;$ord&lt;=255) $cout.=chr($ord-16);<br />    elseif($ord==168) $cout.=chr(240);<br />    elseif($ord==184) $cout.=chr(241);<br />    elseif($ord==185) $cout.=chr(252);<br />    elseif($ord==150||$ord==151) $cout.=chr(45);<br />    elseif($ord==147||$ord==148||$ord==171||$ord==187) $cout.=chr(34);<br />    elseif($ord&gt;=128&amp;&amp;$ord&lt;=190) $i=$i; //нет представления данному символу<br />    else $cout.=chr($ord);<br />}</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=ref.iconv&amp;repo=en&amp;redirect=https://www.php.net/manual/en/ref.iconv.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="book.iconv.php">iconv</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="intro.iconv.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="iconv.setup.php" title="Installing/Configuring">Installing/Configuring</a>
                        </li>
                                                <li class="">
                            <a href="iconv.constants.php" title="Predefined Constants">Predefined Constants</a>
                        </li>
                                                <li class="current">
                            <a href="ref.iconv.php" title="iconv Functions">iconv Functions</a>
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
