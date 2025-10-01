<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: msg_receive - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.msg-receive.php">
 <link rel="shorturl" href="https://www.php.net/msg-receive">
 <link rel="alternate" href="https://www.php.net/msg-receive" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.sem.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.msg-queue-exists.php">
 <link rel="next" href="https://www.php.net/manual/en/function.msg-remove-queue.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.msg-receive.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.msg-receive.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.msg-receive.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.msg-receive.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.msg-receive.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.msg-receive.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.msg-receive.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.msg-receive.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.msg-receive.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.msg-receive.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.msg-receive.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Receive a message from a message queue" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: msg_receive - Manual" />
<meta name="twitter:description" content="Receive a message from a message queue" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: msg_receive - Manual" />
<meta itemprop="description" content="Receive a message from a message queue" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Receive a message from a message queue" />

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
        <a href="function.msg-remove-queue.php">
          msg_remove_queue &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.msg-queue-exists.php">
          &laquo; msg_queue_exists        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.fileprocess.process.php'>Process Control Extensions</a></li>      <li><a href='book.sem.php'>Semaphore</a></li>      <li><a href='ref.sem.php'>Semaphore Functions</a></li>      </ul>
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
            <option value='en/function.msg-receive.php' selected="selected">English</option>
            <option value='de/function.msg-receive.php'>German</option>
            <option value='es/function.msg-receive.php'>Spanish</option>
            <option value='fr/function.msg-receive.php'>French</option>
            <option value='it/function.msg-receive.php'>Italian</option>
            <option value='ja/function.msg-receive.php'>Japanese</option>
            <option value='pt_BR/function.msg-receive.php'>Brazilian Portuguese</option>
            <option value='ru/function.msg-receive.php'>Russian</option>
            <option value='tr/function.msg-receive.php'>Turkish</option>
            <option value='uk/function.msg-receive.php'>Ukrainian</option>
            <option value='zh/function.msg-receive.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.msg-receive" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">msg_receive</h1>
  <p class="verinfo">(PHP 4 &gt;= 4.3.0, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">msg_receive</span> &mdash; <span class="dc-title">Receive a message from a message queue</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.msg-receive-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>msg_receive</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="class.sysvmessagequeue.php" class="type SysvMessageQueue">SysvMessageQueue</a></span> <code class="parameter">$queue</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$desired_message_type</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter reference">&$received_message_type</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$max_message_size</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter reference">&$message</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$unserialize</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong></span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$flags</code><span class="initializer"> = 0</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter reference">&$error_code</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span><br>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">
   <span class="function"><strong>msg_receive()</strong></span> will receive the first message from the
   specified <code class="parameter">queue</code> of the type specified by
   <code class="parameter">desired_message_type</code>.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.msg-receive-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">queue</code></dt>
     <dd>
      <p class="para">
       The message queue.
      </p>
     </dd>
    
    
     <dt><code class="parameter">desired_message_type</code></dt>
     <dd>
      <p class="para">
       If <code class="parameter">desired_message_type</code> is 0, the message from the front
       of the queue is returned. If <code class="parameter">desired_message_type</code> is
       greater than 0, then the first message of that type is returned.
       If <code class="parameter">desired_message_type</code> is less than 0, the first
       message on the queue with a type less than or equal to the
       absolute value of <code class="parameter">desired_message_type</code> will be read.
       If no messages match the criteria, your script will wait until a suitable
       message arrives on the queue.  You can prevent the script from blocking
       by specifying <strong><code><a href="sem.constants.php#constant.msg-ipc-nowait">MSG_IPC_NOWAIT</a></code></strong> in the
       <code class="parameter">flags</code> parameter.
      </p>
     </dd>
    
    
     <dt><code class="parameter">received_message_type</code></dt>
     <dd>
      <p class="para">
       The type of the message that was received will be stored in this
       parameter.
      </p>
     </dd>
    
    
     <dt><code class="parameter">max_message_size</code></dt>
     <dd>
      <p class="para">
       The maximum size of message to be accepted is specified by the
       <code class="parameter">max_message_size</code>; if the message in the queue is larger
       than this size the function will fail (unless you set
       <code class="parameter">flags</code> as described below).
      </p>
     </dd>
    
    
     <dt><code class="parameter">message</code></dt>
     <dd>
      <p class="para">
       The received message will be stored in <code class="parameter">message</code>,
       unless there were errors receiving the message.
      </p>
     </dd>
    
    
     <dt><code class="parameter">unserialize</code></dt>
     <dd>
      <p class="para">
       If set to
       <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong>, the message is treated as though it was serialized using the
       same mechanism as the session module. The message will be unserialized
       and then returned to your script. This allows you to easily receive
       arrays or complex object structures from other PHP scripts, or if you
       are using the WDDX serializer, from any WDDX compatible source.
      </p>
      <p class="para">
       If <code class="parameter">unserialize</code> is <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>, the message will be
       returned as a binary-safe string.
      </p>
     </dd>
    
    
     <dt><code class="parameter">flags</code></dt>
     <dd>
      <p class="para">
       The optional <code class="parameter">flags</code> allows you to pass flags to the
       low-level msgrcv system call.  It defaults to 0, but you may specify one
       or more of the following values (by adding or ORing them together).
       <table class="doctable table">
        <caption><strong>Flag values for msg_receive</strong></caption>
        
         <tbody class="tbody">
          <tr>
           <td><strong><code><a href="sem.constants.php#constant.msg-ipc-nowait">MSG_IPC_NOWAIT</a></code></strong></td>
           <td>If there are no messages of the
            <code class="parameter">desired_message_type</code>, return immediately and do not
            wait.  The function will fail and return an integer value
            corresponding to <strong><code><a href="sem.constants.php#constant.msg-enomsg">MSG_ENOMSG</a></code></strong>.
           </td>
          </tr>

          <tr>
           <td><strong><code><a href="sem.constants.php#constant.msg-except">MSG_EXCEPT</a></code></strong></td>
           <td>Using this flag in combination with a
            <code class="parameter">desired_message_type</code> greater than 0 will cause the
            function to receive the first message that is not equal to
            <code class="parameter">desired_message_type</code>.</td>
          </tr>

          <tr>
           <td><strong><code><a href="sem.constants.php#constant.msg-noerror">MSG_NOERROR</a></code></strong></td>
           <td>
            If the message is longer than <code class="parameter">max_message_size</code>,
            setting this flag will truncate the message to
            <code class="parameter">max_message_size</code> and will not signal an error.
           </td>
          </tr>

         </tbody>
        
       </table>

      </p>
     </dd>
    
    
     <dt><code class="parameter">error_code</code></dt>
     <dd>
      <p class="para">
       If the function fails, the optional <code class="parameter">error_code</code>
       will be set to the value of the system errno variable.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.msg-receive-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> on success or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
  <p class="para">
   Upon successful completion the message queue data structure is updated as
   follows: <code class="literal">msg_lrpid</code> is set to the process-ID of the
   calling process, <code class="literal">msg_qnum</code> is decremented by 1 and
   <code class="literal">msg_rtime</code> is set to the current time.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.msg-receive-changelog">
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
       <td>8.0.0</td>
       <td>
        <code class="parameter">queue</code> expects a <span class="classname"><a href="class.sysvmessagequeue.php" class="classname">SysvMessageQueue</a></span>
        instance now; previously, a <span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span> was expected.
       </td>
      </tr>

     </tbody>
    
   </table>

  </p>
 </div>

 
 <div class="refsect1 seealso" id="refsect1-function.msg-receive-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.msg-remove-queue.php" class="function" rel="rdfs-seeAlso">msg_remove_queue()</a> - Destroy a message queue</span></li>
    <li><span class="function"><a href="function.msg-send.php" class="function" rel="rdfs-seeAlso">msg_send()</a> - Send a message to a message queue</span></li>
    <li><span class="function"><a href="function.msg-stat-queue.php" class="function" rel="rdfs-seeAlso">msg_stat_queue()</a> - Returns information from the message queue data structure</span></li>
    <li><span class="function"><a href="function.msg-set-queue.php" class="function" rel="rdfs-seeAlso">msg_set_queue()</a> - Set information in the message queue data structure</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/sem/functions/msg-receive.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.msg-receive%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.msg-receive&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.msg-receive.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">5 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="104460">  <div class="votes">
    <div id="Vu104460">
    <a href="/manual/vote-note.php?id=104460&amp;page=function.msg-receive&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd104460">
    <a href="/manual/vote-note.php?id=104460&amp;page=function.msg-receive&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V104460" title="60% like this...">
    2
    </div>
  </div>
  <a href="#104460" class="name">
  <strong class="user"><em>marbledore at mail dot ru</em></strong></a><a class="genanchor" href="#104460"> &para;</a><div class="date" title="2011-06-16 03:38"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom104460">
<div class="phpcode"><code><span class="html">It looks like msg_receive() allocates a memory with size $maxsize, and only then tries to receive a message from queue into allocated memory. Because my script dies with $maxsize = 1 Gib, but works with $maxsize = 10 Kib.</span></code></div>
  </div>
 </div>
  <div class="note" id="81920">  <div class="votes">
    <div id="Vu81920">
    <a href="/manual/vote-note.php?id=81920&amp;page=function.msg-receive&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd81920">
    <a href="/manual/vote-note.php?id=81920&amp;page=function.msg-receive&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V81920" title="66% like this...">
    1
    </div>
  </div>
  <a href="#81920" class="name">
  <strong class="user"><em>eimers at mehrkanal dot com</em></strong></a><a class="genanchor" href="#81920"> &para;</a><div class="date" title="2008-03-19 08:49"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom81920">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php error_reporting</span><span class="keyword">(</span><span class="default">E_ALL</span><span class="keyword">);<br /></span><span class="comment">/**<br /> * Example for sending and receiving Messages via the System V Message Queue<br /> *<br /> * To try this script run it synchron/asynchron twice times. One time with ?typ=send and one time with ?typ=receive<br /> *<br /> * @author          Thomas Eimers - Mehrkanal GmbH<br /> *<br /> * This document is distributed in the hope that it will be useful, but without any warranty;<br /> * without even the implied warranty of merchantability or fitness for a particular purpose.<br /> */<br /><br /></span><span class="default">header</span><span class="keyword">(</span><span class="string">'Content-Type: text/plain; charset=ISO-8859-1'</span><span class="keyword">);<br />echo </span><span class="string">"Start...\n"</span><span class="keyword">;<br /><br /></span><span class="comment">// Create System V Message Queue. Integer value is the number of the Queue<br /></span><span class="default">$queue </span><span class="keyword">= </span><span class="default">msg_get_queue</span><span class="keyword">(</span><span class="default">100379</span><span class="keyword">);<br /><br /></span><span class="comment">// Sendoptions<br /></span><span class="default">$message</span><span class="keyword">=</span><span class="string">'nachricht'</span><span class="keyword">;     </span><span class="comment">// Transfering Data<br /></span><span class="default">$serialize_needed</span><span class="keyword">=</span><span class="default">false</span><span class="keyword">;  </span><span class="comment">// Must the transfer data be serialized ?<br /></span><span class="default">$block_send</span><span class="keyword">=</span><span class="default">false</span><span class="keyword">;        </span><span class="comment">// Block if Message could not be send (Queue full...) (true/false)<br /></span><span class="default">$msgtype_send</span><span class="keyword">=</span><span class="default">1</span><span class="keyword">;          </span><span class="comment">// Any Integer above 0. It signeds every Message. So you could handle multible message<br />                          // type in one Queue.<br /><br />// Receiveoptions<br /></span><span class="default">$msgtype_receive</span><span class="keyword">=</span><span class="default">1</span><span class="keyword">;       </span><span class="comment">// Whiche type of Message we want to receive ? (Here, the type is the same as the type we send,<br />                          // but if you set this to 0 you receive the next Message in the Queue with any type.<br /></span><span class="default">$maxsize</span><span class="keyword">=</span><span class="default">100</span><span class="keyword">;             </span><span class="comment">// How long is the maximal data you like to receive.<br /></span><span class="default">$option_receive</span><span class="keyword">=</span><span class="default">MSG_IPC_NOWAIT</span><span class="keyword">; </span><span class="comment">// If there are no messages of the wanted type in the Queue continue without wating.<br />                          // If is set to NULL wait for a Message.<br /><br />// Send or receive 20 Messages<br /></span><span class="keyword">for (</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">20</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">++) {<br />  </span><span class="default">sleep</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">);<br />  </span><span class="comment">// This one sends<br />  </span><span class="keyword">if (</span><span class="default">$_GET</span><span class="keyword">[</span><span class="string">'typ'</span><span class="keyword">]==</span><span class="string">'send'</span><span class="keyword">) {<br />    if(</span><span class="default">msg_send</span><span class="keyword">(</span><span class="default">$queue</span><span class="keyword">,</span><span class="default">$msgtype_send</span><span class="keyword">, </span><span class="default">$message</span><span class="keyword">,</span><span class="default">$serialize_needed</span><span class="keyword">, </span><span class="default">$block_send</span><span class="keyword">,</span><span class="default">$err</span><span class="keyword">)===</span><span class="default">true</span><span class="keyword">) {<br />      echo </span><span class="string">"Message sendet.\n"</span><span class="keyword">;<br />    } else {<br />      </span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$err</span><span class="keyword">);<br />    }<br />  </span><span class="comment">// This one received<br />  </span><span class="keyword">} else {<br />    </span><span class="default">$queue_status</span><span class="keyword">=</span><span class="default">msg_stat_queue</span><span class="keyword">(</span><span class="default">$queue</span><span class="keyword">);<br />    echo </span><span class="string">'Messages in the queue: '</span><span class="keyword">.</span><span class="default">$queue_status</span><span class="keyword">[</span><span class="string">'msg_qnum'</span><span class="keyword">].</span><span class="string">"\n"</span><span class="keyword">;<br /><br />    </span><span class="comment">// WARNUNG: nur weil vor einer Zeile Code noch Nachrichten in der Queue waren, muss das jetzt nciht mehr der Fall sein!<br />    </span><span class="keyword">if (</span><span class="default">$queue_status</span><span class="keyword">[</span><span class="string">'msg_qnum'</span><span class="keyword">]&gt;</span><span class="default">0</span><span class="keyword">) {<br />      if (</span><span class="default">msg_receive</span><span class="keyword">(</span><span class="default">$queue</span><span class="keyword">,</span><span class="default">$msgtype_receive </span><span class="keyword">,</span><span class="default">$msgtype_erhalten</span><span class="keyword">,</span><span class="default">$maxsize</span><span class="keyword">,</span><span class="default">$daten</span><span class="keyword">,</span><span class="default">$serialize_needed</span><span class="keyword">, </span><span class="default">$option_receive</span><span class="keyword">, </span><span class="default">$err</span><span class="keyword">)===</span><span class="default">true</span><span class="keyword">) {<br />              echo </span><span class="string">"Received data"</span><span class="keyword">.</span><span class="default">$daten</span><span class="keyword">.</span><span class="string">"\n"</span><span class="keyword">;<br />      } else {<br />              </span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$err</span><span class="keyword">);<br />      }<br />    }<br />  }<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="123844">  <div class="votes">
    <div id="Vu123844">
    <a href="/manual/vote-note.php?id=123844&amp;page=function.msg-receive&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123844">
    <a href="/manual/vote-note.php?id=123844&amp;page=function.msg-receive&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123844" title="100% like this...">
    1
    </div>
  </div>
  <a href="#123844" class="name">
  <strong class="user"><em>soger</em></strong></a><a class="genanchor" href="#123844"> &para;</a><div class="date" title="2019-05-13 12:28"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123844">
<div class="phpcode"><code><span class="html">It seems that a maxsize of 2Mb is some sort of a threshold for php, above that msg_receive() starts to use a lot of CPU (with a sender that is pushing messages non-stop receiving 10000 messages jumps up from 0.01 sec to 1.5 sec on my computer) so try to stay below that thresholod if you can.</span></code></div>
  </div>
 </div>
  <div class="note" id="80635">  <div class="votes">
    <div id="Vu80635">
    <a href="/manual/vote-note.php?id=80635&amp;page=function.msg-receive&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd80635">
    <a href="/manual/vote-note.php?id=80635&amp;page=function.msg-receive&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V80635" title="50% like this...">
    0
    </div>
  </div>
  <a href="#80635" class="name">
  <strong class="user"><em>marvel at post dot cz</em></strong></a><a class="genanchor" href="#80635"> &para;</a><div class="date" title="2008-01-26 02:27"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom80635">
<div class="phpcode"><code><span class="html">Consider this e.g. Linux situation:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="comment">//file send.php
<br /></span><span class="default">$ip </span><span class="keyword">= </span><span class="default">msg_get_queue</span><span class="keyword">(</span><span class="default">12340</span><span class="keyword">);
<br /></span><span class="default">msg_send</span><span class="keyword">(</span><span class="default">$ip</span><span class="keyword">,</span><span class="default">8</span><span class="keyword">,</span><span class="string">"abcd"</span><span class="keyword">,</span><span class="default">false</span><span class="keyword">,</span><span class="default">false</span><span class="keyword">,</span><span class="default">$err</span><span class="keyword">);
<br /></span><span class="comment">//-----------------------------------------------------
<br /></span><span class="keyword">&lt;?</span><span class="default">php
<br /></span><span class="comment">//file receive.php
<br /></span><span class="default">$ip </span><span class="keyword">= </span><span class="default">msg_get_queue</span><span class="keyword">(</span><span class="default">12340</span><span class="keyword">);
<br />
<br /></span><span class="default">msg_receive</span><span class="keyword">(</span><span class="default">$ip</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">$msgtype</span><span class="keyword">,</span><span class="default">4</span><span class="keyword">,</span><span class="default">$data</span><span class="keyword">,</span><span class="default">false</span><span class="keyword">,</span><span class="default">null</span><span class="keyword">,</span><span class="default">$err</span><span class="keyword">);
<br />echo </span><span class="string">"msgtype </span><span class="keyword">{</span><span class="default">$msgtype</span><span class="keyword">}</span><span class="string"> data </span><span class="keyword">{</span><span class="default">$data</span><span class="keyword">}</span><span class="string">\n"</span><span class="keyword">;
<br />
<br /></span><span class="default">msg_receive</span><span class="keyword">(</span><span class="default">$ip</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">$msgtype</span><span class="keyword">,</span><span class="default">4</span><span class="keyword">,</span><span class="default">$data</span><span class="keyword">,</span><span class="default">false</span><span class="keyword">,</span><span class="default">null</span><span class="keyword">,</span><span class="default">$err</span><span class="keyword">);
<br />echo </span><span class="string">"msgtype </span><span class="keyword">{</span><span class="default">$msgtype</span><span class="keyword">}</span><span class="string"> data </span><span class="keyword">{</span><span class="default">$data</span><span class="keyword">}</span><span class="string">\n"</span><span class="keyword">;
<br /></span><span class="default">?&gt;
<br /></span>
<br />Now run: 
<br />in terminal #1   php5 receive.php
<br />in terminal #2   php5 receive.php
<br />in terminal #3   php5 send.php
<br />
<br />Showing messages from queue will flip-flop. It means you run once send.php, the message will be shown in terminal #1. Second run it will be in t#2, third #1 and so on.</span></code></div>
  </div>
 </div>
  <div class="note" id="31117">  <div class="votes">
    <div id="Vu31117">
    <a href="/manual/vote-note.php?id=31117&amp;page=function.msg-receive&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd31117">
    <a href="/manual/vote-note.php?id=31117&amp;page=function.msg-receive&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V31117" title="50% like this...">
    0
    </div>
  </div>
  <a href="#31117" class="name">
  <strong class="user"><em>webmaster at toolshed51 dot com</em></strong></a><a class="genanchor" href="#31117"> &para;</a><div class="date" title="2003-04-10 03:56"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom31117">
<div class="phpcode"><code><span class="html">This is meant to be run as your apache user in a terminal, call script in note of msg_send and they will communicate.<br /><br />#! /usr/bin/env php<br /><span class="default">&lt;?php<br />    $MSGKEY </span><span class="keyword">= </span><span class="default">519051</span><span class="keyword">; </span><span class="comment">// Message<br /><br />    </span><span class="default">$msg_id </span><span class="keyword">= </span><span class="default">msg_get_queue </span><span class="keyword">(</span><span class="default">$MSGKEY</span><span class="keyword">, </span><span class="default">0600</span><span class="keyword">);<br /><br />    while (</span><span class="default">1</span><span class="keyword">) {<br />        if (</span><span class="default">msg_receive </span><span class="keyword">(</span><span class="default">$msg_id</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">, </span><span class="default">$msg_type</span><span class="keyword">, </span><span class="default">16384</span><span class="keyword">, </span><span class="default">$msg</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$msg_error</span><span class="keyword">)) {<br />            if (</span><span class="default">$msg </span><span class="keyword">== </span><span class="string">'Quit'</span><span class="keyword">) break;<br />            echo </span><span class="string">"</span><span class="default">$msg</span><span class="string">\n"</span><span class="keyword">;<br />        } else {<br />            echo </span><span class="string">"Received </span><span class="default">$msg_error</span><span class="string"> fetching message\n"</span><span class="keyword">;<br />            break;<br />        }<br />    }<br /><br />    </span><span class="default">msg_remove_queue </span><span class="keyword">(</span><span class="default">$msg_id</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.msg-receive&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.msg-receive.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.sem.php">Semaphore Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.ftok.php" title="ftok">ftok</a>
                        </li>
                                                <li class="">
                            <a href="function.msg-get-queue.php" title="msg_&#8203;get_&#8203;queue">msg_&#8203;get_&#8203;queue</a>
                        </li>
                                                <li class="">
                            <a href="function.msg-queue-exists.php" title="msg_&#8203;queue_&#8203;exists">msg_&#8203;queue_&#8203;exists</a>
                        </li>
                                                <li class="current">
                            <a href="function.msg-receive.php" title="msg_&#8203;receive">msg_&#8203;receive</a>
                        </li>
                                                <li class="">
                            <a href="function.msg-remove-queue.php" title="msg_&#8203;remove_&#8203;queue">msg_&#8203;remove_&#8203;queue</a>
                        </li>
                                                <li class="">
                            <a href="function.msg-send.php" title="msg_&#8203;send">msg_&#8203;send</a>
                        </li>
                                                <li class="">
                            <a href="function.msg-set-queue.php" title="msg_&#8203;set_&#8203;queue">msg_&#8203;set_&#8203;queue</a>
                        </li>
                                                <li class="">
                            <a href="function.msg-stat-queue.php" title="msg_&#8203;stat_&#8203;queue">msg_&#8203;stat_&#8203;queue</a>
                        </li>
                                                <li class="">
                            <a href="function.sem-acquire.php" title="sem_&#8203;acquire">sem_&#8203;acquire</a>
                        </li>
                                                <li class="">
                            <a href="function.sem-get.php" title="sem_&#8203;get">sem_&#8203;get</a>
                        </li>
                                                <li class="">
                            <a href="function.sem-release.php" title="sem_&#8203;release">sem_&#8203;release</a>
                        </li>
                                                <li class="">
                            <a href="function.sem-remove.php" title="sem_&#8203;remove">sem_&#8203;remove</a>
                        </li>
                                                <li class="">
                            <a href="function.shm-attach.php" title="shm_&#8203;attach">shm_&#8203;attach</a>
                        </li>
                                                <li class="">
                            <a href="function.shm-detach.php" title="shm_&#8203;detach">shm_&#8203;detach</a>
                        </li>
                                                <li class="">
                            <a href="function.shm-get-var.php" title="shm_&#8203;get_&#8203;var">shm_&#8203;get_&#8203;var</a>
                        </li>
                                                <li class="">
                            <a href="function.shm-has-var.php" title="shm_&#8203;has_&#8203;var">shm_&#8203;has_&#8203;var</a>
                        </li>
                                                <li class="">
                            <a href="function.shm-put-var.php" title="shm_&#8203;put_&#8203;var">shm_&#8203;put_&#8203;var</a>
                        </li>
                                                <li class="">
                            <a href="function.shm-remove.php" title="shm_&#8203;remove">shm_&#8203;remove</a>
                        </li>
                                                <li class="">
                            <a href="function.shm-remove-var.php" title="shm_&#8203;remove_&#8203;var">shm_&#8203;remove_&#8203;var</a>
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
