<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: EventBufferEvent - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/class.eventbufferevent.php">
 <link rel="shorturl" href="https://www.php.net/eventbufferevent">
 <link rel="alternate" href="https://www.php.net/eventbufferevent" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.event.php">
 <link rel="prev" href="https://www.php.net/manual/en/eventbuffer.write.php">
 <link rel="next" href="https://www.php.net/manual/en/eventbufferevent.close.php">

 <link rel="alternate" href="https://www.php.net/manual/en/class.eventbufferevent.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/class.eventbufferevent.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/class.eventbufferevent.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/class.eventbufferevent.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/class.eventbufferevent.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/class.eventbufferevent.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/class.eventbufferevent.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/class.eventbufferevent.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/class.eventbufferevent.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/class.eventbufferevent.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/class.eventbufferevent.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="The EventBufferEvent class" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: EventBufferEvent - Manual" />
<meta name="twitter:description" content="The EventBufferEvent class" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: EventBufferEvent - Manual" />
<meta itemprop="description" content="The EventBufferEvent class" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="The EventBufferEvent class" />

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
        <a href="eventbufferevent.close.php">
          EventBufferEvent::close &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="eventbuffer.write.php">
          &laquo; EventBuffer::write        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.remote.other.php'>Other Services</a></li>      <li><a href='book.event.php'>Event</a></li>      </ul>
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
            <option value='en/class.eventbufferevent.php' selected="selected">English</option>
            <option value='de/class.eventbufferevent.php'>German</option>
            <option value='es/class.eventbufferevent.php'>Spanish</option>
            <option value='fr/class.eventbufferevent.php'>French</option>
            <option value='it/class.eventbufferevent.php'>Italian</option>
            <option value='ja/class.eventbufferevent.php'>Japanese</option>
            <option value='pt_BR/class.eventbufferevent.php'>Brazilian Portuguese</option>
            <option value='ru/class.eventbufferevent.php'>Russian</option>
            <option value='tr/class.eventbufferevent.php'>Turkish</option>
            <option value='uk/class.eventbufferevent.php'>Ukrainian</option>
            <option value='zh/class.eventbufferevent.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="class.eventbufferevent" class="reference">
 <h1 class="title">The EventBufferEvent class</h1>
 
 <div class="partintro"><p class="verinfo">(PECL event &gt;= 1.2.6-beta)</p>

  <div class="section" id="eventbufferevent.intro">
   <h2 class="title">Introduction</h2>
   <p class="para">
    Represents Libevent&#039;s buffer event.
   </p>
   <p class="para">
    Usually an application wants to perform some amount of data buffering in
    addition to just responding to events. When we want to write data, for
    example, the usual pattern looks like:
   </p>
   <ol type="1">
    <li class="listitem">
     <p class="para">
      Decide that we want to write some data to a connection; put that data in
      a buffer.
     </p>
    </li>
    <li class="listitem">
     <p class="para">
      Wait for the connection to become writable
     </p>
    </li>
    <li class="listitem">
     <p class="para">
      Write as much of the data as we can
     </p>
    </li>
    <li class="listitem">
     <p class="para">
      Remember how much we wrote, and if we still have more data to write,
      wait for the connection to become writable again.
     </p>
    </li>
   </ol>
   <p class="para">
    This buffered I/O pattern is common enough that Libevent provides a
    generic mechanism for it. A &quot;buffer event&quot; consists of an underlying
    transport (like a socket), a read buffer, and a write buffer. Instead of
    regular events, which give callbacks when the underlying transport is
    ready to be read or written, a buffer event invokes its user-supplied
    callbacks when it has read or written enough data.
   </p>
  </div>

  <div class="section" id="eventbufferevent.synopsis">
   <h2 class="title">Class synopsis</h2>


   <div class="classsynopsis">
    <span class="ooclass">
     <strong class="classname"></strong>
    </span>

    <div class="classsynopsisinfo">
     <span class="ooclass">
      <span class="modifier">final</span>
      <span class="modifier">class</span> <strong class="classname">EventBufferEvent</strong>
     </span>
     {</div>

    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Constants */</div>
    <div class="fieldsynopsis">
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.eventbufferevent.php#eventbufferevent.constants.reading"><var class="varname">READING</var></a></var><span class="initializer"> = 1</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.eventbufferevent.php#eventbufferevent.constants.writing"><var class="varname">WRITING</var></a></var><span class="initializer"> = 2</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.eventbufferevent.php#eventbufferevent.constants.eof"><var class="varname">EOF</var></a></var><span class="initializer"> = 16</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.eventbufferevent.php#eventbufferevent.constants.error"><var class="varname">ERROR</var></a></var><span class="initializer"> = 32</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.eventbufferevent.php#eventbufferevent.constants.timeout"><var class="varname">TIMEOUT</var></a></var><span class="initializer"> = 64</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.eventbufferevent.php#eventbufferevent.constants.connected"><var class="varname">CONNECTED</var></a></var><span class="initializer"> = 128</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.eventbufferevent.php#eventbufferevent.constants.opt-close-on-free"><var class="varname">OPT_CLOSE_ON_FREE</var></a></var><span class="initializer"> = 1</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.eventbufferevent.php#eventbufferevent.constants.opt-threadsafe"><var class="varname">OPT_THREADSAFE</var></a></var><span class="initializer"> = 2</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.eventbufferevent.php#eventbufferevent.constants.opt-defer-callbacks"><var class="varname">OPT_DEFER_CALLBACKS</var></a></var><span class="initializer"> = 4</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.eventbufferevent.php#eventbufferevent.constants.opt-unlock-callbacks"><var class="varname">OPT_UNLOCK_CALLBACKS</var></a></var><span class="initializer"> = 8</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.eventbufferevent.php#eventbufferevent.constants.ssl-open"><var class="varname">SSL_OPEN</var></a></var><span class="initializer"> = 0</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.eventbufferevent.php#eventbufferevent.constants.ssl-connecting"><var class="varname">SSL_CONNECTING</var></a></var><span class="initializer"> = 1</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.eventbufferevent.php#eventbufferevent.constants.ssl-accepting"><var class="varname">SSL_ACCEPTING</var></a></var><span class="initializer"> = 2</span>;</div>

    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Properties */</div>
    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="varname"><a href="class.eventbufferevent.php#eventbufferevent.props.fd">$<var class="varname">fd</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="varname"><a href="class.eventbufferevent.php#eventbufferevent.props.priority">$<var class="varname">priority</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">readonly</span>
     <span class="type"><a href="class.eventbuffer.php" class="type EventBuffer">EventBuffer</a></span>
      <var class="varname"><a href="class.eventbufferevent.php#eventbufferevent.props.input">$<var class="varname">input</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">readonly</span>
     <span class="type"><a href="class.eventbuffer.php" class="type EventBuffer">EventBuffer</a></span>
      <var class="varname"><a href="class.eventbufferevent.php#eventbufferevent.props.output">$<var class="varname">output</var></a></var>;</div>

    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Methods */</div>
    <div class="methodsynopsis dc-description">
   <span class="modifier">public</span>
   <span class="methodname"><a href="eventbufferevent.close.php" class="methodname">close</a></span>(): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span>
   <span class="methodname"><a href="eventbufferevent.connect.php" class="methodname">connect</a></span>(<span class="methodparam">
    
    <span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$addr</code>
   </span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span>
   <span class="methodname"><a href="eventbufferevent.connecthost.php" class="methodname">connectHost</a></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam">
    
    <span class="type"><a href="class.eventdnsbase.php" class="type EventDnsBase">EventDnsBase</a></span> <code class="parameter">$dns_base</code>
   </span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam">
    
    <span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$hostname</code>
   </span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam">
    
    <span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$port</code>
   </span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam">
    
    <span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$family</code>
    <span class="initializer"> = EventUtil::AF_UNSPEC</span>
   </span><br>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span>
   <span class="methodname"><a href="eventbufferevent.construct.php" class="methodname">__construct</a></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam">
    
    <span class="type"><a href="class.eventbase.php" class="type EventBase">EventBase</a></span> <code class="parameter">$base</code>
   </span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam">
    
    <span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$socket</code>
    <span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span>
   </span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam">
    
    <span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$options</code>
    <span class="initializer"> = 0</span>
   </span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam">
    
    <span class="type"><a href="language.types.callable.php" class="type callable">callable</a></span> <code class="parameter">$readcb</code>
    <span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span>
   </span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam">
    
    <span class="type"><a href="language.types.callable.php" class="type callable">callable</a></span> <code class="parameter">$writecb</code>
    <span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span>
   </span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam">
    
    <span class="type"><a href="language.types.callable.php" class="type callable">callable</a></span> <code class="parameter">$eventcb</code>
    <span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span>
   </span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam">
    
    <span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$arg</code>
    <span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span>
   </span><br>)</div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span>
   <span class="modifier">static</span>
   <span class="methodname"><a href="eventbufferevent.createpair.php" class="methodname">createPair</a></span>(<span class="methodparam">
    
    <span class="type"><a href="class.eventbase.php" class="type EventBase">EventBase</a></span> <code class="parameter">$base</code>
   </span>, <span class="methodparam">
    
    <span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$options</code>
    <span class="initializer"> = 0</span>
   </span>): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span>
   <span class="methodname"><a href="eventbufferevent.disable.php" class="methodname">disable</a></span>(<span class="methodparam">
    
    <span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$events</code>
   </span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span>
   <span class="methodname"><a href="eventbufferevent.enable.php" class="methodname">enable</a></span>(<span class="methodparam">
    
    <span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$events</code>
   </span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span>
   <span class="methodname"><a href="eventbufferevent.free.php" class="methodname">free</a></span>(): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span>
   <span class="methodname"><a href="eventbufferevent.getdnserrorstring.php" class="methodname">getDnsErrorString</a></span>(): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span>
   <span class="methodname"><a href="eventbufferevent.getenabled.php" class="methodname">getEnabled</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span>
   <span class="methodname"><a href="eventbufferevent.getinput.php" class="methodname">getInput</a></span>(): <span class="type"><a href="class.eventbuffer.php" class="type EventBuffer">EventBuffer</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span>
   <span class="methodname"><a href="eventbufferevent.getoutput.php" class="methodname">getOutput</a></span>(): <span class="type"><a href="class.eventbuffer.php" class="type EventBuffer">EventBuffer</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span>
   <span class="methodname"><a href="eventbufferevent.read.php" class="methodname">read</a></span>(<span class="methodparam">
    
    <span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$size</code>
   </span>): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span>
   <span class="methodname"><a href="eventbufferevent.readbuffer.php" class="methodname">readBuffer</a></span>(<span class="methodparam">
    
    <span class="type"><a href="class.eventbuffer.php" class="type EventBuffer">EventBuffer</a></span> <code class="parameter">$buf</code>
   </span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span>
   <span class="methodname"><a href="eventbufferevent.setcallbacks.php" class="methodname">setCallbacks</a></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam">
    
    <span class="type"><a href="language.types.callable.php" class="type callable">callable</a></span> <code class="parameter">$readcb</code>
   </span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam">
    
    <span class="type"><a href="language.types.callable.php" class="type callable">callable</a></span> <code class="parameter">$writecb</code>
   </span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam">
    
    <span class="type"><a href="language.types.callable.php" class="type callable">callable</a></span> <code class="parameter">$eventcb</code>
   </span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam">
    
    <span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$arg</code>
   <span class="initializer"> = ?</span></span><br>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span>
   <span class="methodname"><a href="eventbufferevent.setpriority.php" class="methodname">setPriority</a></span>(<span class="methodparam">
    
    <span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$priority</code>
   </span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span>
   <span class="methodname"><a href="eventbufferevent.settimeouts.php" class="methodname">setTimeouts</a></span>(<span class="methodparam">
    
    <span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$timeout_read</code>
   </span>, <span class="methodparam">
    
    <span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$timeout_write</code>
   </span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span>
   <span class="methodname"><a href="eventbufferevent.setwatermark.php" class="methodname">setWatermark</a></span>(<span class="methodparam">
    
    <span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$events</code>
   </span>, <span class="methodparam">
    
    <span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$lowmark</code>
   </span>, <span class="methodparam">
    
    <span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$highmark</code>
   </span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span>
   <span class="methodname"><a href="eventbufferevent.sslerror.php" class="methodname">sslError</a></span>(): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span>
   <span class="modifier">static</span>
   <span class="methodname"><a href="eventbufferevent.sslfilter.php" class="methodname">sslFilter</a></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam">
    
    <span class="type"><a href="class.eventbase.php" class="type EventBase">EventBase</a></span> <code class="parameter">$base</code>
   </span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam">
    
    <span class="type"><a href="class.eventbufferevent.php" class="type EventBufferEvent">EventBufferEvent</a></span> <code class="parameter">$underlying</code>
   </span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam">
    
    <span class="type"><a href="class.eventsslcontext.php" class="type EventSslContext">EventSslContext</a></span> <code class="parameter">$ctx</code>
   </span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam">
    
    <span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$state</code>
   </span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam">
    
    <span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$options</code>
    <span class="initializer"> = 0</span>
   </span><br>): <span class="type"><a href="class.eventbufferevent.php" class="type EventBufferEvent">EventBufferEvent</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span>
   <span class="methodname"><a href="eventbufferevent.sslgetcipherinfo.php" class="methodname">sslGetCipherInfo</a></span>(): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span>
   <span class="methodname"><a href="eventbufferevent.sslgetciphername.php" class="methodname">sslGetCipherName</a></span>(): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span>
   <span class="methodname"><a href="eventbufferevent.sslgetcipherversion.php" class="methodname">sslGetCipherVersion</a></span>(): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span>
   <span class="methodname"><a href="eventbufferevent.sslgetprotocol.php" class="methodname">sslGetProtocol</a></span>(): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span>
   <span class="methodname"><a href="eventbufferevent.sslrenegotiate.php" class="methodname">sslRenegotiate</a></span>(): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span>
   <span class="modifier">static</span>
   <span class="methodname"><a href="eventbufferevent.sslsocket.php" class="methodname">sslSocket</a></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam">
    
    <span class="type"><a href="class.eventbase.php" class="type EventBase">EventBase</a></span> <code class="parameter">$base</code>
   </span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam">
    
    <span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$socket</code>
   </span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam">
    
    <span class="type"><a href="class.eventsslcontext.php" class="type EventSslContext">EventSslContext</a></span> <code class="parameter">$ctx</code>
   </span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam">
    
    <span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$state</code>
   </span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam">
    
    <span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$options</code>
   <span class="initializer"> = ?</span></span><br>): <span class="type"><a href="class.eventbufferevent.php" class="type EventBufferEvent">EventBufferEvent</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span>
   <span class="methodname"><a href="eventbufferevent.write.php" class="methodname">write</a></span>(<span class="methodparam">
    
    <span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$data</code>
   </span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span>
   <span class="methodname"><a href="eventbufferevent.writebuffer.php" class="methodname">writeBuffer</a></span>(<span class="methodparam">
    
    <span class="type"><a href="class.eventbuffer.php" class="type EventBuffer">EventBuffer</a></span> <code class="parameter">$buf</code>
   </span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

   }</div>

  </div>

  <div class="section" id="eventbufferevent.props">
   <h2 class="title">Properties</h2>
   <dl>
    
     <dt id="eventbufferevent.props.fd">
      <var class="varname">fd</var>
     </dt>
     <dd>
      <p class="para">
       Numeric file descriptor associated with the buffer event. Normally
       represents a bound socket. Equals to <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong>, if there is no file
       descriptor(socket) associated with the buffer event.
      </p>
     </dd>
    
    
     <dt id="eventbufferevent.props.priority">
      <var class="varname">priority</var>
     </dt>
     <dd>
      <p class="para">
       The priority of the events used to implement the buffer event.
      </p>
     </dd>
    
    
     <dt id="eventbufferevent.props.input">
      <var class="varname">input</var>
     </dt>
     <dd>
      <p class="para">
       Underlying input buffer object(
       <span class="classname"><a href="class.eventbuffer.php" class="classname">EventBuffer</a></span>)
      </p>
     </dd>
    
    
     <dt id="eventbufferevent.props.output">
      <var class="varname">output</var>
     </dt>
     <dd>
      <p class="para">
       Underlying output buffer object(
       <span class="classname"><a href="class.eventbuffer.php" class="classname">EventBuffer</a></span>)
      </p>
     </dd>
    
   </dl>
  </div>


  <div class="section" id="eventbufferevent.constants">
   <h2 class="title">Predefined Constants</h2>
   <dl>
    
     <dt id="eventbufferevent.constants.reading">
      <strong><code><a href="class.eventbufferevent.php#eventbufferevent.constants.reading">EventBufferEvent::READING</a></code></strong>
     </dt>
     <dd>
      <p class="para">
       An event occurred during a read operation on the bufferevent. See the
       other flags for which event it was.
      </p>
     </dd>
    
    
     <dt id="eventbufferevent.constants.writing">
      <strong><code><a href="class.eventbufferevent.php#eventbufferevent.constants.writing">EventBufferEvent::WRITING</a></code></strong>
     </dt>
     <dd>
      <p class="para">
       An event occurred during a write operation on the bufferevent. See the
       other flags for which event it was.
      </p>
     </dd>
    
    
     <dt id="eventbufferevent.constants.eof">
      <strong><code><a href="class.eventbufferevent.php#eventbufferevent.constants.eof">EventBufferEvent::EOF</a></code></strong>
     </dt>
     <dd>
      <p class="para">
       Got an end-of-file indication on the buffer event.
      </p>
     </dd>
    
    
     <dt id="eventbufferevent.constants.error">
      <strong><code><a href="class.eventbufferevent.php#eventbufferevent.constants.error">EventBufferEvent::ERROR</a></code></strong>
     </dt>
     <dd>
      <p class="para">
       An error occurred during a bufferevent operation. For more information
       on what the error was, call
       <span class="methodname"><a href="eventutil.getlastsocketerrno.php" class="methodname">EventUtil::getLastSocketErrno()</a></span>
       and/or
       <span class="methodname"><a href="eventutil.getlastsocketerror.php" class="methodname">EventUtil::getLastSocketError()</a></span>.
      </p>
     </dd>
    
    
     <dt id="eventbufferevent.constants.timeout">
      <strong><code><a href="class.eventbufferevent.php#eventbufferevent.constants.timeout">EventBufferEvent::TIMEOUT</a></code></strong>
     </dt>
     <dd>
      <p class="para"/>
     </dd>
    
    
     <dt id="eventbufferevent.constants.connected">
      <strong><code><a href="class.eventbufferevent.php#eventbufferevent.constants.connected">EventBufferEvent::CONNECTED</a></code></strong>
     </dt>
     <dd>
      <p class="para">
       Finished a requested connection on the bufferevent.
      </p>
     </dd>
    
    
     <dt id="eventbufferevent.constants.opt-close-on-free">
      <strong><code><a href="class.eventbufferevent.php#eventbufferevent.constants.opt-close-on-free">EventBufferEvent::OPT_CLOSE_ON_FREE</a></code></strong>
     </dt>
     <dd>
      <p class="para">
       When the buffer event is freed, close the underlying transport. This
       will close an underlying socket, free an underlying buffer event, etc.
      </p>
     </dd>
    
    
     <dt id="eventbufferevent.constants.opt-threadsafe">
      <strong><code><a href="class.eventbufferevent.php#eventbufferevent.constants.opt-threadsafe">EventBufferEvent::OPT_THREADSAFE</a></code></strong>
     </dt>
     <dd>
      <p class="para">
       Automatically allocate locks for the bufferevent, so that it’s safe
       to use from multiple threads.
      </p>
     </dd>
    
    
     <dt id="eventbufferevent.constants.opt-defer-callbacks">
      <strong><code><a href="class.eventbufferevent.php#eventbufferevent.constants.opt-defer-callbacks">EventBufferEvent::OPT_DEFER_CALLBACKS</a></code></strong>
     </dt>
     <dd>
      <p class="para">
       When this flag is set, the bufferevent defers all of its callbacks. See
       <a href="http://www.wangafu.net/~nickm/libevent-book/Ref6_bufferevent.html#_deferred_callbacks" class="link external">&raquo;&nbsp;Fast
      portable non-blocking network programming with Libevent, Deferred callbacks</a>.
      </p>
     </dd>
    
    
     <dt id="eventbufferevent.constants.opt-unlock-callbacks">
      <strong><code><a href="class.eventbufferevent.php#eventbufferevent.constants.opt-unlock-callbacks">EventBufferEvent::OPT_UNLOCK_CALLBACKS</a></code></strong>
     </dt>
     <dd>
      <p class="para">
       By default, when the bufferevent is set up to be threadsafe, the buffer
       event’s locks are held whenever the any user-provided callback is
       invoked. Setting this option makes Libevent release the buffer
       event’s lock when it’s invoking the callbacks.
      </p>
     </dd>
    
    
     <dt id="eventbufferevent.constants.ssl-open">
      <strong><code><a href="class.eventbufferevent.php#eventbufferevent.constants.ssl-open">EventBufferEvent::SSL_OPEN</a></code></strong>
     </dt>
     <dd>
      <p class="para">
       The SSL handshake is done
      </p>
     </dd>
    
    
     <dt id="eventbufferevent.constants.ssl-connecting">
      <strong><code><a href="class.eventbufferevent.php#eventbufferevent.constants.ssl-connecting">EventBufferEvent::SSL_CONNECTING</a></code></strong>
     </dt>
     <dd>
      <p class="para">
       SSL is currently performing negotiation as a client
      </p>
     </dd>
    
    
     <dt id="eventbufferevent.constants.ssl-accepting">
      <strong><code><a href="class.eventbufferevent.php#eventbufferevent.constants.ssl-accepting">EventBufferEvent::SSL_ACCEPTING</a></code></strong>
     </dt>
     <dd>
      <p class="para">
       SSL is currently performing negotiation as a server
      </p>
     </dd>
    
   </dl>
  </div>

 </div>

 












































































































































<h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="eventbufferevent.close.php">EventBufferEvent::close</a> — Closes file descriptor associated with the current buffer event</li><li><a href="eventbufferevent.connect.php">EventBufferEvent::connect</a> — Connect buffer event's file descriptor to given address or
  UNIX socket</li><li><a href="eventbufferevent.connecthost.php">EventBufferEvent::connectHost</a> — Connects to a hostname with optionally asyncronous DNS resolving</li><li><a href="eventbufferevent.construct.php">EventBufferEvent::__construct</a> — Constructs EventBufferEvent object</li><li><a href="eventbufferevent.createpair.php">EventBufferEvent::createPair</a> — Creates two buffer events connected to each other</li><li><a href="eventbufferevent.disable.php">EventBufferEvent::disable</a> — Disable events read, write, or both on a buffer event</li><li><a href="eventbufferevent.enable.php">EventBufferEvent::enable</a> — Enable events read, write, or both on a buffer event</li><li><a href="eventbufferevent.free.php">EventBufferEvent::free</a> — Free a buffer event</li><li><a href="eventbufferevent.getdnserrorstring.php">EventBufferEvent::getDnsErrorString</a> — Returns string describing the last failed DNS lookup attempt</li><li><a href="eventbufferevent.getenabled.php">EventBufferEvent::getEnabled</a> — Returns bitmask of events currently enabled on the buffer event</li><li><a href="eventbufferevent.getinput.php">EventBufferEvent::getInput</a> — Returns underlying input buffer associated with current buffer
  event</li><li><a href="eventbufferevent.getoutput.php">EventBufferEvent::getOutput</a> — Returns underlying output buffer associated with current buffer
  event</li><li><a href="eventbufferevent.read.php">EventBufferEvent::read</a> — Read buffer's data</li><li><a href="eventbufferevent.readbuffer.php">EventBufferEvent::readBuffer</a> — Drains the entire contents of the input buffer and places them into buf</li><li><a href="eventbufferevent.setcallbacks.php">EventBufferEvent::setCallbacks</a> — Assigns read, write and event(status) callbacks</li><li><a href="eventbufferevent.setpriority.php">EventBufferEvent::setPriority</a> — Assign a priority to a bufferevent</li><li><a href="eventbufferevent.settimeouts.php">EventBufferEvent::setTimeouts</a> — Set the read and write timeout for a buffer event</li><li><a href="eventbufferevent.setwatermark.php">EventBufferEvent::setWatermark</a> — Adjusts read and/or write watermarks</li><li><a href="eventbufferevent.sslerror.php">EventBufferEvent::sslError</a> — Returns most recent OpenSSL error reported on the buffer event</li><li><a href="eventbufferevent.sslfilter.php">EventBufferEvent::sslFilter</a> — Create a new SSL buffer event to send its data over another buffer event</li><li><a href="eventbufferevent.sslgetcipherinfo.php">EventBufferEvent::sslGetCipherInfo</a> — Returns a textual description of the cipher</li><li><a href="eventbufferevent.sslgetciphername.php">EventBufferEvent::sslGetCipherName</a> — Returns the current cipher name of the SSL connection</li><li><a href="eventbufferevent.sslgetcipherversion.php">EventBufferEvent::sslGetCipherVersion</a> — Returns version of cipher used by current SSL connection</li><li><a href="eventbufferevent.sslgetprotocol.php">EventBufferEvent::sslGetProtocol</a> — Returns the name of the protocol used for current SSL connection</li><li><a href="eventbufferevent.sslrenegotiate.php">EventBufferEvent::sslRenegotiate</a> — Tells a bufferevent to begin SSL renegotiation</li><li><a href="eventbufferevent.sslsocket.php">EventBufferEvent::sslSocket</a> — Creates a new SSL buffer event to send its data over an SSL on a socket</li><li><a href="eventbufferevent.write.php">EventBufferEvent::write</a> — Adds data to a buffer event's output buffer</li><li><a href="eventbufferevent.writebuffer.php">EventBufferEvent::writeBuffer</a> — Adds contents of the entire buffer to a buffer event's output
  buffer</li></ul>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/event/eventbufferevent.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fclass.eventbufferevent%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=class.eventbufferevent&amp;repo=en&amp;redirect=https://www.php.net/manual/en/class.eventbufferevent.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="book.event.php">Event</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="intro.event.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="event.setup.php" title="Installing/Configuring">Installing/Configuring</a>
                        </li>
                                                <li class="">
                            <a href="event.examples.php" title="Examples">Examples</a>
                        </li>
                                                <li class="">
                            <a href="event.flags.php" title="Event flags">Event flags</a>
                        </li>
                                                <li class="">
                            <a href="event.persistence.php" title="About event persistence">About event persistence</a>
                        </li>
                                                <li class="">
                            <a href="event.callbacks.php" title="Event callbacks">Event callbacks</a>
                        </li>
                                                <li class="">
                            <a href="event.constructing.signal.events.php" title="Constructing signal events">Constructing signal events</a>
                        </li>
                                                <li class="">
                            <a href="class.event.php" title="Event">Event</a>
                        </li>
                                                <li class="">
                            <a href="class.eventbase.php" title="EventBase">EventBase</a>
                        </li>
                                                <li class="">
                            <a href="class.eventbuffer.php" title="EventBuffer">EventBuffer</a>
                        </li>
                                                <li class="current">
                            <a href="class.eventbufferevent.php" title="EventBufferEvent">EventBufferEvent</a>
                        </li>
                                                <li class="">
                            <a href="eventbufferevent.about.callbacks.php" title="About buffer event callbacks">About buffer event callbacks</a>
                        </li>
                                                <li class="">
                            <a href="class.eventconfig.php" title="EventConfig">EventConfig</a>
                        </li>
                                                <li class="">
                            <a href="class.eventdnsbase.php" title="EventDnsBase">EventDnsBase</a>
                        </li>
                                                <li class="">
                            <a href="class.eventhttp.php" title="EventHttp">EventHttp</a>
                        </li>
                                                <li class="">
                            <a href="class.eventhttpconnection.php" title="EventHttpConnection">EventHttpConnection</a>
                        </li>
                                                <li class="">
                            <a href="class.eventhttprequest.php" title="EventHttpRequest">EventHttpRequest</a>
                        </li>
                                                <li class="">
                            <a href="class.eventlistener.php" title="EventListener">EventListener</a>
                        </li>
                                                <li class="">
                            <a href="class.eventsslcontext.php" title="EventSslContext">EventSslContext</a>
                        </li>
                                                <li class="">
                            <a href="class.eventutil.php" title="EventUtil">EventUtil</a>
                        </li>
                                                <li class="">
                            <a href="class.eventexception.php" title="EventException">EventException</a>
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
