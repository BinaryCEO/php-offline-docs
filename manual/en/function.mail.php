<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: mail - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.mail.php">
 <link rel="shorturl" href="https://www.php.net/mail">
 <link rel="alternate" href="https://www.php.net/mail" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.mail.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.ezmlm-hash.php">
 <link rel="next" href="https://www.php.net/manual/en/book.mailparse.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.mail.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.mail.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.mail.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.mail.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.mail.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.mail.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.mail.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.mail.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.mail.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.mail.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.mail.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Send mail" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: mail - Manual" />
<meta name="twitter:description" content="Send mail" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: mail - Manual" />
<meta itemprop="description" content="Send mail" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Send mail" />

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
        <a href="book.mailparse.php">
          Mailparse &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.ezmlm-hash.php">
          &laquo; ezmlm_hash        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.remote.mail.php'>Mail Related Extensions</a></li>      <li><a href='book.mail.php'>Mail</a></li>      <li><a href='ref.mail.php'>Mail Functions</a></li>      </ul>
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
            <option value='en/function.mail.php' selected="selected">English</option>
            <option value='de/function.mail.php'>German</option>
            <option value='es/function.mail.php'>Spanish</option>
            <option value='fr/function.mail.php'>French</option>
            <option value='it/function.mail.php'>Italian</option>
            <option value='ja/function.mail.php'>Japanese</option>
            <option value='pt_BR/function.mail.php'>Brazilian Portuguese</option>
            <option value='ru/function.mail.php'>Russian</option>
            <option value='tr/function.mail.php'>Turkish</option>
            <option value='uk/function.mail.php'>Ukrainian</option>
            <option value='zh/function.mail.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.mail" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">mail</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">mail</span> &mdash; <span class="dc-title">Send mail</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-function.mail-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>mail</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$to</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$subject</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$message</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="language.types.array.php" class="type array">array</a></span>|<span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$additional_headers</code><span class="initializer"> = []</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$additional_params</code><span class="initializer"> = &quot;&quot;</span></span><br>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">
   Sends an email.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.mail-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">to</code></dt>
     <dd>
      <p class="para">
       Receiver, or receivers of the mail.
      </p>
      <p class="para">
       The formatting of this string must comply with
       <a href="https://datatracker.ietf.org/doc/html/rfc2822" class="link external">&raquo;&nbsp;RFC 2822</a>. Some examples are:
       <ul class="simplelist">
        <li>user@example.com</li>
        <li>user@example.com, anotheruser@example.com</li>
        <li>User <user@example.com></li>
        <li>User <user@example.com>, Another User <anotheruser@example.com></li>
       </ul>
      </p>
     </dd>
    
    
     <dt><code class="parameter">subject</code></dt>
     <dd>
      <p class="para">
       Subject of the email to be sent.
      </p>
      <div class="caution"><strong class="caution">Caution</strong>
       <p class="para">
        Subject must satisfy <a href="https://datatracker.ietf.org/doc/html/rfc2047" class="link external">&raquo;&nbsp;RFC 2047</a>.
       </p>
      </div>
     </dd>
    
    
     <dt><code class="parameter">message</code></dt>
     <dd>
      <p class="para">
       Message to be sent.
      </p>
      <p class="para">
       Each line should be separated with a CRLF (\r\n). Lines should not be
       larger than 70 characters.
      </p>
      <div class="caution"><strong class="caution">Caution</strong>
       <p class="para">
        (Windows only) When PHP is talking to a SMTP server directly, if a full
        stop is found on the start of a line, it is removed. To counter-act this,
        replace these occurrences with a double dot.
        <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$text </span><span style="color: #007700">= </span><span style="color: #0000BB">str_replace</span><span style="color: #007700">(</span><span style="color: #DD0000">"\n."</span><span style="color: #007700">, </span><span style="color: #DD0000">"\n.."</span><span style="color: #007700">, </span><span style="color: #0000BB">$text</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
        </div>

       </p>
      </div>
     </dd>
    
    
     <dt><code class="parameter">additional_headers</code> (optional)</dt>
     <dd>
      <p class="para">
       <span class="type"><a href="language.types.string.php" class="type String">String</a></span> or <span class="type"><a href="language.types.array.php" class="type array">array</a></span> to be inserted at the end of the email header.
      </p>
      <p class="para">
       This is typically used to add extra headers (From, Cc, and Bcc).
       Multiple extra headers should be separated with a CRLF (\r\n).
       If outside data are used to compose this header, the data should be sanitized
       so that no unwanted headers could be injected. 
      </p>
      <p class="para">
       If an <span class="type"><a href="language.types.array.php" class="type array">array</a></span> is passed, its keys are the header names and its
       values are the respective header values.
      </p>
      <blockquote class="note"><p><strong class="note">Note</strong>: 
       <p class="para">
        When sending mail, the mail <em>must</em> contain
        a <code class="literal">From</code> header. This can be set with the
        <code class="parameter">additional_headers</code> parameter, or a default
        can be set in <var class="filename">php.ini</var>.
       </p>
       <p class="para">
        Failing to do this will result in an error
        message similar to <code class="literal">Warning: mail(): &quot;sendmail_from&quot; not
        set in php.ini or custom &quot;From:&quot; header missing</code>.
        The <code class="literal">From</code> header sets also
        <code class="literal">Return-Path</code> when sending directly via SMTP (Windows only).
       </p>
      </p></blockquote>
      <blockquote class="note"><p><strong class="note">Note</strong>: 
       <p class="para">
        If messages are not received, try using a LF (\n) only.
        Some Unix mail transfer agents (most notably
        <a href="http://cr.yp.to/qmail.html" class="link external">&raquo;&nbsp;qmail</a>) replace LF by CRLF
        automatically (which leads to doubling CR if CRLF is used).
        This should be a last resort, as it does not comply with
        <a href="https://datatracker.ietf.org/doc/html/rfc2822" class="link external">&raquo;&nbsp;RFC 2822</a>.
       </p>
      </p></blockquote>
     </dd>
    
    
     <dt><code class="parameter">additional_params</code> (optional)</dt>
     <dd>
      <p class="para">
       The <code class="parameter">additional_params</code> parameter
       can be used to pass additional flags as command line options to the
       program configured to be used when sending mail, as defined by the
       <code class="literal">sendmail_path</code> configuration setting. For example,
       this can be used to set the envelope sender address when using
       sendmail with the <code class="literal">-f</code> sendmail option.
      </p>
      <p class="para">
       This parameter is escaped by <span class="function"><a href="function.escapeshellcmd.php" class="function">escapeshellcmd()</a></span> internally
       to prevent command execution. <span class="function"><a href="function.escapeshellcmd.php" class="function">escapeshellcmd()</a></span> prevents
       command execution, but allows to add additional parameters. For security reasons,
       it is recommended for the user to sanitize this parameter to avoid adding unwanted
       parameters to the shell command.
      </p>
      <p class="para">
       Since <span class="function"><a href="function.escapeshellcmd.php" class="function">escapeshellcmd()</a></span> is applied automatically, some characters
       that are allowed as email addresses by internet RFCs cannot be used. 
       <span class="function"><strong>mail()</strong></span> can not allow such characters, so in programs where the use of
       such characters is required, alternative means of sending emails (such as using a framework
       or a library) is recommended. 
      </p>
      <p class="para">
       The user that the webserver runs as should be added as a trusted user to the
       sendmail configuration to prevent a &#039;X-Warning&#039; header from being added
       to the message when the envelope sender (-f) is set using this method.
       For sendmail users, this file is <var class="filename">/etc/mail/trusted-users</var>.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.mail-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> if the mail was successfully accepted for delivery, <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> otherwise.
  </p>
  <p class="para">
   It is important to note that just because the mail was accepted for delivery,
   it does NOT mean the mail will actually reach the intended destination.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.mail-changelog">
  <h3 class="title">Changelog</h3>
  <p class="para">
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
        The <code class="parameter">additional_headers</code> parameter now also accepts
        an <span class="type"><a href="language.types.array.php" class="type array">array</a></span>.
       </td>
      </tr>

     </tbody>
    
   </table>

  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.mail-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-3255">
    <p><strong>Example #1 Sending mail.</strong></p>
    <div class="example-contents"><p>
     Using <span class="function"><strong>mail()</strong></span> to send a simple email:
    </p></div>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// The message<br /></span><span style="color: #0000BB">$message </span><span style="color: #007700">= </span><span style="color: #DD0000">"Line 1\r\nLine 2\r\nLine 3"</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">// In case any of our lines are larger than 70 characters, we should use wordwrap()<br /></span><span style="color: #0000BB">$message </span><span style="color: #007700">= </span><span style="color: #0000BB">wordwrap</span><span style="color: #007700">(</span><span style="color: #0000BB">$message</span><span style="color: #007700">, </span><span style="color: #0000BB">70</span><span style="color: #007700">, </span><span style="color: #DD0000">"\r\n"</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Send<br /></span><span style="color: #0000BB">mail</span><span style="color: #007700">(</span><span style="color: #DD0000">'caffeinated@example.com'</span><span style="color: #007700">, </span><span style="color: #DD0000">'My Subject'</span><span style="color: #007700">, </span><span style="color: #0000BB">$message</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
   <div class="example" id="example-3256">
    <p><strong>Example #2 Sending mail with extra headers.</strong></p>
    <div class="example-contents"><p>
     The addition of basic headers, telling the MUA
     the From and Reply-To addresses:
    </p></div>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$to      </span><span style="color: #007700">= </span><span style="color: #DD0000">'nobody@example.com'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$subject </span><span style="color: #007700">= </span><span style="color: #DD0000">'the subject'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$message </span><span style="color: #007700">= </span><span style="color: #DD0000">'hello'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$headers </span><span style="color: #007700">= </span><span style="color: #DD0000">'From: webmaster@example.com' </span><span style="color: #007700">. </span><span style="color: #DD0000">"\r\n" </span><span style="color: #007700">.<br />    </span><span style="color: #DD0000">'Reply-To: webmaster@example.com' </span><span style="color: #007700">. </span><span style="color: #DD0000">"\r\n" </span><span style="color: #007700">.<br />    </span><span style="color: #DD0000">'X-Mailer: PHP/' </span><span style="color: #007700">. </span><span style="color: #0000BB">phpversion</span><span style="color: #007700">();<br /><br /></span><span style="color: #0000BB">mail</span><span style="color: #007700">(</span><span style="color: #0000BB">$to</span><span style="color: #007700">, </span><span style="color: #0000BB">$subject</span><span style="color: #007700">, </span><span style="color: #0000BB">$message</span><span style="color: #007700">, </span><span style="color: #0000BB">$headers</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
   <div class="example" id="example-3257">
    <p><strong>Example #3 Sending mail with extra headers as <span class="type"><a href="language.types.array.php" class="type array">array</a></span></strong></p>
    <div class="example-contents"><p>
     This example sends the same mail as the example immediately above, but
     passes the additional headers as array (available as of PHP 7.2.0).
    </p></div>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$to      </span><span style="color: #007700">= </span><span style="color: #DD0000">'nobody@example.com'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$subject </span><span style="color: #007700">= </span><span style="color: #DD0000">'the subject'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$message </span><span style="color: #007700">= </span><span style="color: #DD0000">'hello'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$headers </span><span style="color: #007700">= array(<br />    </span><span style="color: #DD0000">'From' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'webmaster@example.com'</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">'Reply-To' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'webmaster@example.com'</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">'X-Mailer' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'PHP/' </span><span style="color: #007700">. </span><span style="color: #0000BB">phpversion</span><span style="color: #007700">()<br />);<br /><br /></span><span style="color: #0000BB">mail</span><span style="color: #007700">(</span><span style="color: #0000BB">$to</span><span style="color: #007700">, </span><span style="color: #0000BB">$subject</span><span style="color: #007700">, </span><span style="color: #0000BB">$message</span><span style="color: #007700">, </span><span style="color: #0000BB">$headers</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
   <div class="example" id="example-3258">
    <p><strong>Example #4 Sending mail with an additional command line parameter.</strong></p>
    <div class="example-contents"><p>
     The <code class="parameter">additional_params</code> parameter
     can be used to pass an additional parameter to the program configured
     to use when sending mail using the <code class="literal">sendmail_path</code>.
    </p></div>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />mail</span><span style="color: #007700">(</span><span style="color: #DD0000">'nobody@example.com'</span><span style="color: #007700">, </span><span style="color: #DD0000">'the subject'</span><span style="color: #007700">, </span><span style="color: #DD0000">'the message'</span><span style="color: #007700">, </span><span style="color: #0000BB">null</span><span style="color: #007700">,<br />   </span><span style="color: #DD0000">'-fwebmaster@example.com'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
   <div class="example" id="example-3259">
    <p><strong>Example #5 Sending HTML email</strong></p>
    <div class="example-contents"><p>
     It is also possible to send HTML email with <span class="function"><strong>mail()</strong></span>.
    </p></div>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// Multiple recipients<br /></span><span style="color: #0000BB">$to </span><span style="color: #007700">= </span><span style="color: #DD0000">'johny@example.com, sally@example.com'</span><span style="color: #007700">; </span><span style="color: #FF8000">// note the comma<br /><br />// Subject<br /></span><span style="color: #0000BB">$subject </span><span style="color: #007700">= </span><span style="color: #DD0000">'Birthday Reminders for August'</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">// Message<br /></span><span style="color: #0000BB">$message </span><span style="color: #007700">= </span><span style="color: #DD0000">'<br />&lt;html&gt;<br />&lt;head&gt;<br />  &lt;title&gt;Birthday Reminders for August&lt;/title&gt;<br />&lt;/head&gt;<br />&lt;body&gt;<br />  &lt;p&gt;Here are the birthdays upcoming in August!&lt;/p&gt;<br />  &lt;table&gt;<br />    &lt;tr&gt;<br />      &lt;th&gt;Person&lt;/th&gt;&lt;th&gt;Day&lt;/th&gt;&lt;th&gt;Month&lt;/th&gt;&lt;th&gt;Year&lt;/th&gt;<br />    &lt;/tr&gt;<br />    &lt;tr&gt;<br />      &lt;td&gt;Johny&lt;/td&gt;&lt;td&gt;10th&lt;/td&gt;&lt;td&gt;August&lt;/td&gt;&lt;td&gt;1970&lt;/td&gt;<br />    &lt;/tr&gt;<br />    &lt;tr&gt;<br />      &lt;td&gt;Sally&lt;/td&gt;&lt;td&gt;17th&lt;/td&gt;&lt;td&gt;August&lt;/td&gt;&lt;td&gt;1973&lt;/td&gt;<br />    &lt;/tr&gt;<br />  &lt;/table&gt;<br />&lt;/body&gt;<br />&lt;/html&gt;<br />'</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">// To send HTML mail, the Content-type header must be set<br /></span><span style="color: #0000BB">$headers</span><span style="color: #007700">[] = </span><span style="color: #DD0000">'MIME-Version: 1.0'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$headers</span><span style="color: #007700">[] = </span><span style="color: #DD0000">'Content-type: text/html; charset=iso-8859-1'</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">// Additional headers<br /></span><span style="color: #0000BB">$headers</span><span style="color: #007700">[] = </span><span style="color: #DD0000">'To: Mary &lt;mary@example.com&gt;, Kelly &lt;kelly@example.com&gt;'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$headers</span><span style="color: #007700">[] = </span><span style="color: #DD0000">'From: Birthday Reminder &lt;birthday@example.com&gt;'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$headers</span><span style="color: #007700">[] = </span><span style="color: #DD0000">'Cc: birthdayarchive@example.com'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$headers</span><span style="color: #007700">[] = </span><span style="color: #DD0000">'Bcc: birthdaycheck@example.com'</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">// Mail it<br /></span><span style="color: #0000BB">mail</span><span style="color: #007700">(</span><span style="color: #0000BB">$to</span><span style="color: #007700">, </span><span style="color: #0000BB">$subject</span><span style="color: #007700">, </span><span style="color: #0000BB">$message</span><span style="color: #007700">, </span><span style="color: #0000BB">implode</span><span style="color: #007700">(</span><span style="color: #DD0000">"\r\n"</span><span style="color: #007700">, </span><span style="color: #0000BB">$headers</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
  <p class="para">
   <blockquote class="note"><p><strong class="note">Note</strong>: 
    <p class="para">
     If intending to send HTML or otherwise Complex mails, it is recommended
     to use the PEAR package <a href="https://pear.php.net/package/Mail_Mime" class="link external">&raquo;&nbsp;PEAR::Mail_Mime</a>.
    </p>
   </p></blockquote>
  </p>
 </div>


 <div class="refsect1 notes" id="refsect1-function.mail-notes">    
  <h3 class="title">Notes</h3>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    The SMTP implementation (Windows only) of <span class="function"><strong>mail()</strong></span> differs in many
    ways from the sendmail implementation. First, it doesn&#039;t use a local binary
    for composing messages but only operates on direct sockets which means a
    <code class="literal">MTA</code> is needed listening on a network socket (which
    can either on the localhost or a remote machine).
   </p>
   <p class="para">
    Second, the custom headers like
    <code class="literal">From:</code>,
    <code class="literal">Cc:</code>,
    <code class="literal">Bcc:</code> and
    <code class="literal">Date:</code> are
    <strong>not</strong> interpreted by the
    <code class="literal">MTA</code> in the first place, but are parsed by PHP.
   </p>
   <p class="para">
    As such, the <code class="parameter">to</code> parameter should not be an address
    in the form of &quot;Something &lt;someone@example.com&gt;&quot;. The
    mail command may not parse this properly while talking with 
    the MTA.
   </p>
  </p></blockquote>
  
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    It is worth noting that the <span class="function"><strong>mail()</strong></span> function is not
    suitable for larger volumes of email in a loop. This function opens
    and closes an SMTP socket for each email, which is not very efficient.
   </p>
   <p class="para">
    For the sending of large amounts of email, see the
    <a href="https://pear.php.net/package/Mail" class="link external">&raquo;&nbsp;PEAR::Mail</a>, and
    <a href="https://pear.php.net/package/Mail_Queue" class="link external">&raquo;&nbsp;PEAR::Mail_Queue</a> packages.
   </p>
  </p></blockquote>

  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    The following RFCs may be useful:
    <a href="https://datatracker.ietf.org/doc/html/rfc1896" class="link external">&raquo;&nbsp;RFC 1896</a>,
    <a href="https://datatracker.ietf.org/doc/html/rfc2045" class="link external">&raquo;&nbsp;RFC 2045</a>,
    <a href="https://datatracker.ietf.org/doc/html/rfc2046" class="link external">&raquo;&nbsp;RFC 2046</a>,
    <a href="https://datatracker.ietf.org/doc/html/rfc2047" class="link external">&raquo;&nbsp;RFC 2047</a>,
    <a href="https://datatracker.ietf.org/doc/html/rfc2048" class="link external">&raquo;&nbsp;RFC 2048</a>,
    <a href="https://datatracker.ietf.org/doc/html/rfc2049" class="link external">&raquo;&nbsp;RFC 2049</a>, and
    <a href="https://datatracker.ietf.org/doc/html/rfc2822" class="link external">&raquo;&nbsp;RFC 2822</a>.
   </p>
  </p></blockquote>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.mail-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.mb-send-mail.php" class="function" rel="rdfs-seeAlso">mb_send_mail()</a> - Send encoded mail</span></li>
    <li><span class="function"><a href="function.imap-mail.php" class="function" rel="rdfs-seeAlso">imap_mail()</a> - Send an email message</span></li>
    <li><a href="https://pear.php.net/package/Mail" class="link external">&raquo;&nbsp;PEAR::Mail</a></li>
    <li><a href="https://pear.php.net/package/Mail_Mime" class="link external">&raquo;&nbsp;PEAR::Mail_Mime</a></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/mail/functions/mail.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.mail%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.mail&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.mail.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">17 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="121163">  <div class="votes">
    <div id="Vu121163">
    <a href="/manual/vote-note.php?id=121163&amp;page=function.mail&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121163">
    <a href="/manual/vote-note.php?id=121163&amp;page=function.mail&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121163" title="54% like this...">
    26
    </div>
  </div>
  <a href="#121163" class="name">
  <strong class="user"><em>php at simoneast dot net</em></strong></a><a class="genanchor" href="#121163"> &para;</a><div class="date" title="2017-05-31 05:19"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121163">
<div class="phpcode"><code><span class="html">Often it's helpful to find the exact error message that is triggered by the mail() function. While the function doesn't provide an error directly, you can use error_get_last() when mail() returns false.<br /><br /><span class="default">&lt;?php<br />$success </span><span class="keyword">= </span><span class="default">mail</span><span class="keyword">(</span><span class="string">'example@example.com'</span><span class="keyword">, </span><span class="string">'My Subject'</span><span class="keyword">, </span><span class="default">$message</span><span class="keyword">);<br />if (!</span><span class="default">$success</span><span class="keyword">) {<br />    </span><span class="default">$errorMessage </span><span class="keyword">= </span><span class="default">error_get_last</span><span class="keyword">()[</span><span class="string">'message'</span><span class="keyword">];<br />}<br /></span><span class="default">?&gt;<br /></span><br />(Tested successfully on Windows which uses SMTP by default, but sendmail on Linux/OSX may not provide the same level of detail.)<br /><br />Thanks to <a href="https://stackoverflow.com/a/20203870/195835" rel="nofollow" target="_blank">https://stackoverflow.com/a/20203870/195835</a></span></code></div>
  </div>
 </div>
  <div class="note" id="120328">  <div class="votes">
    <div id="Vu120328">
    <a href="/manual/vote-note.php?id=120328&amp;page=function.mail&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120328">
    <a href="/manual/vote-note.php?id=120328&amp;page=function.mail&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120328" title="53% like this...">
    23
    </div>
  </div>
  <a href="#120328" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#120328"> &para;</a><div class="date" title="2016-12-14 10:18"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120328">
<div class="phpcode"><code><span class="html">Security advice: Although it is not documented, for the parameters $to and $subject the mail() function changes at least \r and \n to space. So these parameters are safe against injection of additional headers. But you might want to check $to for commas as these separate multiple addresses and you might not want to send to more than one recipient.<br /><br />The crucial part is the $additional_headers parameter. This parameter can't be cleaned by the mail() function. So it is up to you to prevent unwanted \r or \n to be inserted into the values you put in there. Otherwise you just created a potential spam distributor.</span></code></div>
  </div>
 </div>
  <div class="note" id="124291">  <div class="votes">
    <div id="Vu124291">
    <a href="/manual/vote-note.php?id=124291&amp;page=function.mail&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124291">
    <a href="/manual/vote-note.php?id=124291&amp;page=function.mail&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124291" title="54% like this...">
    21
    </div>
  </div>
  <a href="#124291" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#124291"> &para;</a><div class="date" title="2019-10-12 07:36"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom124291">
<div class="phpcode"><code><span class="html">If you notice wrong displayed characters in the email it's because you need to properly set the Content-Type and the Charset in the headers of the email:<br /><br /><span class="default">&lt;?php<br />$headers </span><span class="keyword">= </span><span class="string">'Content-Type: text/plain; charset=utf-8' </span><span class="keyword">. </span><span class="string">"\r\n"</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span><br />Mostly, UTF-8 is your best choice.<br /><br />You can set custom headers with the fourth parameter of the mail() function.<br /><br />To make the whole thing waterproof, add the following header too:<br /><br /><span class="default">&lt;?php<br />$headers </span><span class="keyword">.= </span><span class="string">'Content-Transfer-Encoding: base64' </span><span class="keyword">. </span><span class="string">"\r\n"</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span><br />Now you can use the combination of UTF-8 and Base64 to properly encode the subject line and the recipient name like this:<br /><br /><span class="default">&lt;?php<br />$subject </span><span class="keyword">= </span><span class="string">'=?UTF-8?B?' </span><span class="keyword">. </span><span class="default">base64_encode</span><span class="keyword">(</span><span class="string">'Test email with German Umlauts öäüß'</span><span class="keyword">) . </span><span class="string">'?='</span><span class="keyword">;<br /></span><span class="default">$recipient </span><span class="keyword">= </span><span class="string">'=?UTF-8?B?' </span><span class="keyword">. </span><span class="default">base64_encode</span><span class="keyword">(</span><span class="string">'Margret Müller'</span><span class="keyword">) . </span><span class="string">'?= &lt;recipient@domain.com&gt;'</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span><br />And don't forget to Base64 encode the email message too:<br /><br /><span class="default">&lt;?php<br />$message </span><span class="keyword">= </span><span class="default">base64_encode</span><span class="keyword">(</span><span class="string">'This email contains German Umlauts öäüß.'</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />All references are taken from:<br /><a href="https://dev.to/lutvit/how-to-make-the-php-mail-function-awesome-3cii" rel="nofollow" target="_blank">https://dev.to/lutvit/how-to-make-the-php-mail-function-awesome-3cii</a></span></code></div>
  </div>
 </div>
  <div class="note" id="129090">  <div class="votes">
    <div id="Vu129090">
    <a href="/manual/vote-note.php?id=129090&amp;page=function.mail&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129090">
    <a href="/manual/vote-note.php?id=129090&amp;page=function.mail&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129090" title="62% like this...">
    14
    </div>
  </div>
  <a href="#129090" class="name">
  <strong class="user"><em>priyanshkala3 at gmail dot com</em></strong></a><a class="genanchor" href="#129090"> &para;</a><div class="date" title="2023-12-06 11:21"><strong>1 year ago</strong></div>
  <div class="text" id="Hcom129090">
<div class="phpcode"><code><span class="html">Sending mail using XAMPP server<br /><br />I encountered numerous issues while attempting to send emails using the XAMPP server. However, I eventually found the correct method to accomplish it.<br /><br />Configuring PHP's mail functionality to work with Gmail's SMTP server involves editing the `php.ini` and `sendmail.ini` configuration files. Below are the formal steps for setting up PHP to send emails through Gmail's SMTP server using XAMPP:<br /><br />Configuring php.ini:<br /><br />1. Open `php.ini` in an editor:<br />   Open the `php.ini` configuration file in your preferred text editor.<br /><br />2. Locate the mail function:<br />   Use the search function (Ctrl + F) to find the section related to the mail function within the `php.ini` file.<br /><br />3. Update mail function settings:<br />   Copy and paste the following configuration parameters into the mail function section. Comment out or disable all other settings related to mail.<br /><br />   php.ini code to be edited:<br /><br />   SMTP=smtp.gmail.com<br />   smtp_port=587<br />   sendmail_from = yourmail@gmail.com<br />   sendmail_path = write_sendmail.exe_path<br />   <br /><br />4. Save the changes:<br />   Save the `php.ini` file after applying the modifications.<br /><br />Configuring sendmail.ini (in XAMPP folder):<br /><br />1. Open `sendmail.ini` in XAMPP folder:<br />   Locate and open the `sendmail.ini` configuration file within the XAMPP directory.<br /><br />2. Adjust SMTP settings:<br />   Insert the following content into the `sendmail.ini` file, marking other configurations as comments:<br /><br />   sendmail.ini code :<br /><br />   smtp_server=smtp.gmail.com<br />   smtp_port=587<br />   error_logfile=error.log<br />   debug_logfile=debug.log<br />   auth_username=yourmail@gmail.com<br />auth_password=app_password_after_enabling_two_factor_authentication_for_your_mail_id<br />   force_sender=priyansh.kala.4@gmail.com<br />   <br /><br />3. Save the changes:<br />   Save the `sendmail.ini` file after inserting the specified configurations.<br /><br />These steps configure PHP to utilize Gmail's SMTP server for sending emails. Ensure that the modifications are saved and that the necessary XAMPP services are restarted for the changes to take effect.<br /><br />Please note that using hardcoded passwords in configuration files poses a security risk. Storing passwords directly in plain text files should be avoided in production environments. Consider using environment variables or secure credential management systems for better security practices.<br /><br />Code for sending mail-:<br /><br /><span class="default">&lt;?php<br />$subject </span><span class="keyword">= </span><span class="string">"Mail for checking"</span><span class="keyword">;<br /></span><span class="default">$msg </span><span class="keyword">= </span><span class="string">"Hey! Let us play with PHP."</span><span class="keyword">;<br /></span><span class="default">$receiver </span><span class="keyword">= </span><span class="string">"reciever@gmail.com"</span><span class="keyword">;<br /></span><span class="default">mail</span><span class="keyword">(</span><span class="default">$receiver</span><span class="keyword">, </span><span class="default">$subject</span><span class="keyword">, </span><span class="default">$msg</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="121027">  <div class="votes">
    <div id="Vu121027">
    <a href="/manual/vote-note.php?id=121027&amp;page=function.mail&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121027">
    <a href="/manual/vote-note.php?id=121027&amp;page=function.mail&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121027" title="54% like this...">
    11
    </div>
  </div>
  <a href="#121027" class="name">
  <strong class="user"><em>chris at ocproducts dot com</em></strong></a><a class="genanchor" href="#121027"> &para;</a><div class="date" title="2017-04-26 10:04"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121027">
<div class="phpcode"><code><span class="html">The 'sendmail' executable which PHP uses on Linux/Mac (not Windows) expects "\n" as a line separator.<br /><br />This executable is a standard, and emulated by other MTAs.<br /><br />"\n" is confirmed required for qmail and postfix, probably also for sendmail and exim but I have not tested.<br /><br />If you pass through using "\r\n" as a separator it may appear to work, but your email will be subtly corrupted and some middleware may break. It only works because some systems will clean up your mistake.<br /><br />If you are implementing DKIM be very careful, as DKIM checks will fail (at least on popular validation tools) if you screw this up. DKIM must be calculated using "\r\n" but then you must switch it all to "\n" when using the PHP mail function.<br /><br />On Windows, however, you should use "\r\n" because PHP is using SMTP in this situation, and hence the normal rules of the SMTP protocol (not the normal rules of Unix piping) apply.</span></code></div>
  </div>
 </div>
  <div class="note" id="121858">  <div class="votes">
    <div id="Vu121858">
    <a href="/manual/vote-note.php?id=121858&amp;page=function.mail&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121858">
    <a href="/manual/vote-note.php?id=121858&amp;page=function.mail&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121858" title="52% like this...">
    11
    </div>
  </div>
  <a href="#121858" class="name">
  <strong class="user"><em>charles dot fisher at arconic dot com</em></strong></a><a class="genanchor" href="#121858"> &para;</a><div class="date" title="2017-11-10 07:34"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom121858">
<div class="phpcode"><code><span class="html">I migrated an application to a platform without a local transport agent (MTA). I did not want to configure an MTA, so I wrote this xxmail function to replace mail() with calls to a remote SMTP server. Hopefully it is of some use.<br /><br />function xxmail($to, $subject, $body, $headers)<br />{<br /> $smtp = stream_socket_client('tcp://smtp.yourmail.com:25', $eno, $estr, 30);<br /><br /> $B = 8192;<br /> $c = "\r\n";<br /> $s = 'myapp@someserver.com';<br /><br /> fwrite($smtp, 'helo ' . $_ENV['HOSTNAME'] . $c);<br />  $junk = fgets($smtp, $B);<br /><br /> // Envelope<br /> fwrite($smtp, 'mail from: ' . $s . $c);<br />  $junk = fgets($smtp, $B);<br /> fwrite($smtp, 'rcpt to: ' . $to . $c);<br />  $junk = fgets($smtp, $B);<br /> fwrite($smtp, 'data' . $c);<br />  $junk = fgets($smtp, $B);<br /><br /> // Header <br /> fwrite($smtp, 'To: ' . $to . $c); <br /> if(strlen($subject)) fwrite($smtp, 'Subject: ' . $subject . $c); <br /> if(strlen($headers)) fwrite($smtp, $headers); // Must be \r\n (delimited)<br /> fwrite($smtp, $headers . $c); <br /><br /> // Body<br /> if(strlen($body)) fwrite($smtp, $body . $c); <br /> fwrite($smtp, $c . '.' . $c);<br />  $junk = fgets($smtp, $B);<br /><br /> // Close<br /> fwrite($smtp, 'quit' . $c);<br />  $junk = fgets($smtp, $B);<br /> fclose($smtp);<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="128151">  <div class="votes">
    <div id="Vu128151">
    <a href="/manual/vote-note.php?id=128151&amp;page=function.mail&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd128151">
    <a href="/manual/vote-note.php?id=128151&amp;page=function.mail&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V128151" title="57% like this...">
    4
    </div>
  </div>
  <a href="#128151" class="name">
  <strong class="user"><em>atesin &gt; gmail</em></strong></a><a class="genanchor" href="#128151"> &para;</a><div class="date" title="2023-01-26 12:23"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom128151">
<div class="phpcode"><code><span class="html">mail() internals:<br /><br />doing some tests i can say... if sendmail_path is defined in php.ini or by ini.set(), by calling function like...<br /><br />mail($to, $subject, $message, $headers, $params)<br /><br />would be like if php open a shell internally, execute this command, send this text to stdin, and return true if return value == 0<br /><br />------------<br />shell&gt; $sendmail_path $params<br />To: $to<br />Subject: $subject<br />$headers<br /><br />$message<br />(EOF)<br />------------<br /><br />in windows instead using php smtp which is very limited, i prefer to force use sendmail-like behavior, by setting sendmail_path and then use msmtp for windows</span></code></div>
  </div>
 </div>
  <div class="note" id="98775">  <div class="votes">
    <div id="Vu98775">
    <a href="/manual/vote-note.php?id=98775&amp;page=function.mail&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd98775">
    <a href="/manual/vote-note.php?id=98775&amp;page=function.mail&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V98775" title="51% like this...">
    9
    </div>
  </div>
  <a href="#98775" class="name">
  <strong class="user"><em>Porjo</em></strong></a><a class="genanchor" href="#98775"> &para;</a><div class="date" title="2010-07-06 11:19"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom98775">
<div class="phpcode"><code><span class="html">Make sure you enclose \r\n in double quotes (not single quotes!) so that PHP can translate that into the correct linefeed code</span></code></div>
  </div>
 </div>
  <div class="note" id="124015">  <div class="votes">
    <div id="Vu124015">
    <a href="/manual/vote-note.php?id=124015&amp;page=function.mail&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124015">
    <a href="/manual/vote-note.php?id=124015&amp;page=function.mail&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124015" title="52% like this...">
    3
    </div>
  </div>
  <a href="#124015" class="name">
  <strong class="user"><em>Mark Simon</em></strong></a><a class="genanchor" href="#124015"> &para;</a><div class="date" title="2019-07-05 07:04"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom124015">
<div class="phpcode"><code><span class="html">It is worth noting that you can set up a fake sendmail program using the sendmail_path directive in php.ini.<br /><br />Despite the comment in that file, sendmail_path also works for Window. From <a href="https://www.php.net/manual/en/mail.configuration.php#ini.sendmail-path:" rel="nofollow" target="_blank">https://www.php.net/manual/en/mail.configuration.php#ini.sendmail-path:</a><br /><br />This directive works also under Windows. If set, smtp, smtp_port and sendmail_from are ignored and the specified command is executed.</span></code></div>
  </div>
 </div>
  <div class="note" id="59773">  <div class="votes">
    <div id="Vu59773">
    <a href="/manual/vote-note.php?id=59773&amp;page=function.mail&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd59773">
    <a href="/manual/vote-note.php?id=59773&amp;page=function.mail&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V59773" title="51% like this...">
    4
    </div>
  </div>
  <a href="#59773" class="name">
  <strong class="user"><em>Ben Cooke</em></strong></a><a class="genanchor" href="#59773"> &para;</a><div class="date" title="2005-12-15 05:34"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom59773">
<div class="phpcode"><code><span class="html">Note that there is a big difference between the behavior of this function on Windows systems vs. UNIX systems. On Windows it delivers directly to an SMTP server, while on a UNIX system it uses a local command to hand off to the system's own MTA.
<br />
<br />The upshot of all this is that on a Windows system your  message and headers must use the standard line endings \r\n as prescribed by the email specs. On a UNIX system the MTA's "sendmail" interface assumes that recieved data will use UNIX line endings and will turn any \n to \r\n, so you must supply only \n to mail() on a UNIX system to avoid the MTA hypercorrecting to \r\r\n.
<br />
<br />If you use plain old \n on a Windows system, some MTAs will get a little upset. qmail in particular will refuse outright to accept any message that has a lonely \n without an accompanying \r.</span></code></div>
  </div>
 </div>
  <div class="note" id="128324">  <div class="votes">
    <div id="Vu128324">
    <a href="/manual/vote-note.php?id=128324&amp;page=function.mail&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd128324">
    <a href="/manual/vote-note.php?id=128324&amp;page=function.mail&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V128324" title="52% like this...">
    1
    </div>
  </div>
  <a href="#128324" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#128324"> &para;</a><div class="date" title="2023-03-20 12:44"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom128324">
<div class="phpcode"><code><span class="html">So far I used the following to make sure special charakters where correctly shown in the mail subject:<br /><br /><span class="default">&lt;?php $subject </span><span class="keyword">= </span><span class="string">'=?utf-8?B?' </span><span class="keyword">. </span><span class="default">base64_encode</span><span class="keyword">(</span><span class="default">$subject</span><span class="keyword">) . </span><span class="string">'?='</span><span class="keyword">; </span><span class="default">?&gt;<br /></span><br />But with very long subjects, the header line gets longer than 76 chars and some e-mail servers really don't like that... So this is my new solution:<br /><br /><span class="default">&lt;?php $subject </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">mb_encode_mimeheader</span><span class="keyword">(</span><span class="string">"Subject: " </span><span class="keyword">. </span><span class="default">$subject</span><span class="keyword">, </span><span class="string">'utf-8'</span><span class="keyword">, </span><span class="string">'B'</span><span class="keyword">, </span><span class="string">"\r\n"</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">), </span><span class="default">9</span><span class="keyword">); </span><span class="default">?&gt;<br /></span><br />Please note: I added "Subject: " in front of $subject and stripped it of afterwards. This is to make sure, that the necessarry space is reserved, as PHP will add the "Subject: " itself...</span></code></div>
  </div>
 </div>
  <div class="note" id="125168">  <div class="votes">
    <div id="Vu125168">
    <a href="/manual/vote-note.php?id=125168&amp;page=function.mail&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125168">
    <a href="/manual/vote-note.php?id=125168&amp;page=function.mail&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125168" title="50% like this...">
    0
    </div>
  </div>
  <a href="#125168" class="name">
  <strong class="user"><em>pangz dot lab at gmail dot com</em></strong></a><a class="genanchor" href="#125168"> &para;</a><div class="date" title="2020-07-06 08:42"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom125168">
<div class="phpcode"><code><span class="html">* Sending email with attachment<br /><br />function sendMail(<br />    string $fileAttachment,<br />    string $mailMessage = MAIL_CONF["mailMessage"],<br />    string $subject     = MAIL_CONF["subject"],<br />    string $toAddress   = MAIL_CONF["toAddress"],<br />    string $fromMail    = MAIL_CONF["fromMail"]<br />): bool {<br />    <br />    $fileAttachment = trim($fileAttachment);<br />    $from           = $fromMail;<br />    $pathInfo       = pathinfo($fileAttachment);<br />    $attchmentName  = "attachment_".date("YmdHms").(<br />    (isset($pathInfo['extension']))? ".".$pathInfo['extension'] : ""<br />    );<br />    <br />    $attachment    = chunk_split(base64_encode(file_get_contents($fileAttachment)));<br />    $boundary      = "PHP-mixed-".md5(time());<br />    $boundWithPre  = "\n--".$boundary;<br />    <br />    $headers   = "From: $from";<br />    $headers  .= "\nReply-To: $from";<br />    $headers  .= "\nContent-Type: multipart/mixed; boundary=\"".$boundary."\"";<br />    <br />    $message   = $boundWithPre;<br />    $message  .= "\n Content-Type: text/plain; charset=UTF-8\n";<br />    $message  .= "\n $mailMessage";<br />    <br />    $message .= $boundWithPre;<br />    $message .= "\nContent-Type: application/octet-stream; name=\"".$attchmentName."\"";<br />    $message .= "\nContent-Transfer-Encoding: base64\n";<br />    $message .= "\nContent-Disposition: attachment\n";<br />    $message .= $attachment;<br />    $message .= $boundWithPre."--";<br />    <br />    return mail($toAddress, $subject, $message, $headers);<br />}<br /><br />* Sending email in html<br /><br />function sendHtmlMail(<br />    string $mailMessage = MAIL_CONF["mailMessage"],<br />    string $subject     = MAIL_CONF["subject"],<br />    array $toAddress    = MAIL_CONF["toAddress"],<br />    string $fromMail    = MAIL_CONF["fromMail"]<br />): bool {<br />    <br />    $to        = implode(",", $toAddress);<br />    $headers[] = 'MIME-Version: 1.0';<br />    $headers[] = 'Content-type: text/html; charset=iso-8859-1';    <br />    $headers[] = 'To: '.$to;<br />    $headers[] = 'From: '.$fromMail;    <br /><br />    return mail($to, $subject, $mailMessage, implode("\r\n", $headers));<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="121411">  <div class="votes">
    <div id="Vu121411">
    <a href="/manual/vote-note.php?id=121411&amp;page=function.mail&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121411">
    <a href="/manual/vote-note.php?id=121411&amp;page=function.mail&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121411" title="50% like this...">
    0
    </div>
  </div>
  <a href="#121411" class="name">
  <strong class="user"><em>eeeugeneee</em></strong></a><a class="genanchor" href="#121411"> &para;</a><div class="date" title="2017-07-21 01:39"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121411">
<div class="phpcode"><code><span class="html">Send mail with minimal requirements from email services.<br /><br /><span class="default">&lt;?php<br />    $encoding </span><span class="keyword">= </span><span class="string">"utf-8"</span><span class="keyword">;<br /><br />    </span><span class="comment">// Preferences for Subject field<br />    </span><span class="default">$subject_preferences </span><span class="keyword">= array(<br />        </span><span class="string">"input-charset" </span><span class="keyword">=&gt; </span><span class="default">$encoding</span><span class="keyword">,<br />        </span><span class="string">"output-charset" </span><span class="keyword">=&gt; </span><span class="default">$encoding</span><span class="keyword">,<br />        </span><span class="string">"line-length" </span><span class="keyword">=&gt; </span><span class="default">76</span><span class="keyword">,<br />        </span><span class="string">"line-break-chars" </span><span class="keyword">=&gt; </span><span class="string">"\r\n"<br />    </span><span class="keyword">);<br /><br />    </span><span class="comment">// Mail header<br />    </span><span class="default">$header </span><span class="keyword">= </span><span class="string">"Content-type: text/html; charset="</span><span class="keyword">.</span><span class="default">$encoding</span><span class="keyword">.</span><span class="string">" \r\n"</span><span class="keyword">;<br />    </span><span class="default">$header </span><span class="keyword">.= </span><span class="string">"From: "</span><span class="keyword">.</span><span class="default">$from_name</span><span class="keyword">.</span><span class="string">" &lt;"</span><span class="keyword">.</span><span class="default">$from_mail</span><span class="keyword">.</span><span class="string">"&gt; \r\n"</span><span class="keyword">;<br />    </span><span class="default">$header </span><span class="keyword">.= </span><span class="string">"MIME-Version: 1.0 \r\n"</span><span class="keyword">;<br />    </span><span class="default">$header </span><span class="keyword">.= </span><span class="string">"Content-Transfer-Encoding: 8bit \r\n"</span><span class="keyword">;<br />    </span><span class="default">$header </span><span class="keyword">.= </span><span class="string">"Date: "</span><span class="keyword">.</span><span class="default">date</span><span class="keyword">(</span><span class="string">"r (T)"</span><span class="keyword">).</span><span class="string">" \r\n"</span><span class="keyword">;<br />    </span><span class="default">$header </span><span class="keyword">.= </span><span class="default">iconv_mime_encode</span><span class="keyword">(</span><span class="string">"Subject"</span><span class="keyword">, </span><span class="default">$mail_subject</span><span class="keyword">, </span><span class="default">$subject_preferences</span><span class="keyword">);<br /><br />    </span><span class="comment">// Send mail<br />    </span><span class="default">mail</span><span class="keyword">(</span><span class="default">$mail_to</span><span class="keyword">, </span><span class="default">$mail_subject</span><span class="keyword">, </span><span class="default">$mail_message</span><span class="keyword">, </span><span class="default">$header</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="107321">  <div class="votes">
    <div id="Vu107321">
    <a href="/manual/vote-note.php?id=107321&amp;page=function.mail&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd107321">
    <a href="/manual/vote-note.php?id=107321&amp;page=function.mail&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V107321" title="50% like this...">
    0
    </div>
  </div>
  <a href="#107321" class="name">
  <strong class="user"><em>ABOMB</em></strong></a><a class="genanchor" href="#107321"> &para;</a><div class="date" title="2012-01-30 10:16"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom107321">
<div class="phpcode"><code><span class="html">I was having delivery issues from this function to Gmail, Yahoo, AOL, etc.  I used the notes here to figure that you need to be setting your Return-Path to a valid email to catch bounces.  There are two extra delivery gotchas on top of that:<br /><br />1) The domain in the email used in the -f option in the php.ini sendmail parameter or in the mail() extra parameters field, needs to have a valid SPF record for the domain (in DNS as a "TXT" record type for sure and add an additional  "SPF" type record if possible).  Why? That's header field being used for spam checks.<br /><br />2) You should also use a domain key or DKIM.  The trick here is that the domain key/DKIM is case sensitive!  I used Cpanel to create my domain key which automatically used all lowercase domain names in the key creation.  I found when  sending email and using a camel case "-f account@MyDomainHere.Com" option, my key was not accepted.  However it was accepted when I used "-f account@mydomainhere.com".<br /><br />There are many other factors that can contribute to mail not getting to inboxes, including your own multiple failed testing attempts, so I suggest you consult each site's guidelines and don't ask me for help.  These are just the couple technical issues that helped my case.<br /><br />I hope this saves someone some time and headaches...</span></code></div>
  </div>
 </div>
  <div class="note" id="108669">  <div class="votes">
    <div id="Vu108669">
    <a href="/manual/vote-note.php?id=108669&amp;page=function.mail&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd108669">
    <a href="/manual/vote-note.php?id=108669&amp;page=function.mail&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V108669" title="49% like this...">
    -2
    </div>
  </div>
  <a href="#108669" class="name">
  <strong class="user"><em>pavel.lint at vk.com</em></strong></a><a class="genanchor" href="#108669"> &para;</a><div class="date" title="2012-05-16 11:22"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom108669">
<div class="phpcode"><code><span class="html">Here's a small handy function I use to send email in UTF-8.<br /><br /> <span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">mail_utf8</span><span class="keyword">(</span><span class="default">$to</span><span class="keyword">, </span><span class="default">$from_user</span><span class="keyword">, </span><span class="default">$from_email</span><span class="keyword">, <br />                                             </span><span class="default">$subject </span><span class="keyword">= </span><span class="string">'(No subject)'</span><span class="keyword">, </span><span class="default">$message </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">)<br />   { <br />      </span><span class="default">$from_user </span><span class="keyword">= </span><span class="string">"=?UTF-8?B?"</span><span class="keyword">.</span><span class="default">base64_encode</span><span class="keyword">(</span><span class="default">$from_user</span><span class="keyword">).</span><span class="string">"?="</span><span class="keyword">;<br />      </span><span class="default">$subject </span><span class="keyword">= </span><span class="string">"=?UTF-8?B?"</span><span class="keyword">.</span><span class="default">base64_encode</span><span class="keyword">(</span><span class="default">$subject</span><span class="keyword">).</span><span class="string">"?="</span><span class="keyword">;<br /><br />      </span><span class="default">$headers </span><span class="keyword">= </span><span class="string">"From: </span><span class="default">$from_user</span><span class="string"> &lt;</span><span class="default">$from_email</span><span class="string">&gt;\r\n"</span><span class="keyword">. <br />               </span><span class="string">"MIME-Version: 1.0" </span><span class="keyword">. </span><span class="string">"\r\n" </span><span class="keyword">. <br />               </span><span class="string">"Content-type: text/html; charset=UTF-8" </span><span class="keyword">. </span><span class="string">"\r\n"</span><span class="keyword">; <br /><br />     return </span><span class="default">mail</span><span class="keyword">(</span><span class="default">$to</span><span class="keyword">, </span><span class="default">$subject</span><span class="keyword">, </span><span class="default">$message</span><span class="keyword">, </span><span class="default">$headers</span><span class="keyword">); <br />   }<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="108498">  <div class="votes">
    <div id="Vu108498">
    <a href="/manual/vote-note.php?id=108498&amp;page=function.mail&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd108498">
    <a href="/manual/vote-note.php?id=108498&amp;page=function.mail&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V108498" title="49% like this...">
    -3
    </div>
  </div>
  <a href="#108498" class="name">
  <strong class="user"><em>rexlorenzo at gmail dot com</em></strong></a><a class="genanchor" href="#108498"> &para;</a><div class="date" title="2012-05-02 01:24"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom108498">
<div class="phpcode"><code><span class="html">Be careful to not put extra spaces for the $headers variable.<br /><br />For example, this didn't work on our servers:<br /><br />$headers = "From: $from \r\n Bcc: $bcc \r\n";<br /><br />But this did:<br /><br />$headers = "From: $from\r\nBcc: $bcc\r\n";<br /><br />Notice the removal of the spaces around the first \r\n.</span></code></div>
  </div>
 </div>
  <div class="note" id="127880">  <div class="votes">
    <div id="Vu127880">
    <a href="/manual/vote-note.php?id=127880&amp;page=function.mail&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd127880">
    <a href="/manual/vote-note.php?id=127880&amp;page=function.mail&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V127880" title="46% like this...">
    -3
    </div>
  </div>
  <a href="#127880" class="name">
  <strong class="user"><em>andrew at my-syte dot com</em></strong></a><a class="genanchor" href="#127880"> &para;</a><div class="date" title="2022-10-31 02:36"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom127880">
<div class="phpcode"><code><span class="html">Regarding To: <br /><br />be careful not to duplicate To in the additional_headers, <br /><br />lest gmail already flags it thus:<br /><br />host gmail-smtp-in.l.google.com [142.251.xx.xx]<br />SMTP error from remote mail server after end of data:<br />550-5.7.1 [xxx.xxx.xx.xx] This message is not RFC 5322 compliant, the issue is:<br />550-5.7.1 duplicate To headers. To reduce the amount of spam sent to Gmail,<br />550-5.7.1 this message has been blocked. Please review<br />550 5.7.1 RFC 5322 specifications for more information.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.mail&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.mail.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.mail.php">Mail Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="current">
                            <a href="function.mail.php" title="mail">mail</a>
                        </li>
                        
                    </ul>
                
            </li>
                        
                        <li>
                <span class="header">Deprecated</span>
                <ul class="child-menu-list">
                                    <li class="">
                        <a href="function.ezmlm-hash.php" title="ezmlm_&#8203;hash">ezmlm_&#8203;hash</a>
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
