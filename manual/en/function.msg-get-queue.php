<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: msg_get_queue - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.msg-get-queue.php">
 <link rel="shorturl" href="https://www.php.net/msg-get-queue">
 <link rel="alternate" href="https://www.php.net/msg-get-queue" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.sem.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.ftok.php">
 <link rel="next" href="https://www.php.net/manual/en/function.msg-queue-exists.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.msg-get-queue.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.msg-get-queue.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.msg-get-queue.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.msg-get-queue.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.msg-get-queue.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.msg-get-queue.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.msg-get-queue.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.msg-get-queue.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.msg-get-queue.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.msg-get-queue.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.msg-get-queue.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Create or attach to a message queue" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: msg_get_queue - Manual" />
<meta name="twitter:description" content="Create or attach to a message queue" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: msg_get_queue - Manual" />
<meta itemprop="description" content="Create or attach to a message queue" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Create or attach to a message queue" />

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
        <a href="function.msg-queue-exists.php">
          msg_queue_exists &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.ftok.php">
          &laquo; ftok        </a>
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
            <option value='en/function.msg-get-queue.php' selected="selected">English</option>
            <option value='de/function.msg-get-queue.php'>German</option>
            <option value='es/function.msg-get-queue.php'>Spanish</option>
            <option value='fr/function.msg-get-queue.php'>French</option>
            <option value='it/function.msg-get-queue.php'>Italian</option>
            <option value='ja/function.msg-get-queue.php'>Japanese</option>
            <option value='pt_BR/function.msg-get-queue.php'>Brazilian Portuguese</option>
            <option value='ru/function.msg-get-queue.php'>Russian</option>
            <option value='tr/function.msg-get-queue.php'>Turkish</option>
            <option value='uk/function.msg-get-queue.php'>Ukrainian</option>
            <option value='zh/function.msg-get-queue.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.msg-get-queue" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">msg_get_queue</h1>
  <p class="verinfo">(PHP 4 &gt;= 4.3.0, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">msg_get_queue</span> &mdash; <span class="dc-title">Create or attach to a message queue</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.msg-get-queue-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>msg_get_queue</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$key</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$permissions</code><span class="initializer"> = 0666</span></span>): <span class="type"><span class="type"><a href="class.sysvmessagequeue.php" class="type SysvMessageQueue">SysvMessageQueue</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">
   <span class="function"><strong>msg_get_queue()</strong></span> returns an id that can be used to
   access the System V message queue with the given
   <code class="parameter">key</code>. The first call creates the message queue with
   the optional <code class="parameter">permissions</code>.
   A second call to <span class="function"><strong>msg_get_queue()</strong></span> for the same
   <code class="parameter">key</code> will return a different message queue
   identifier, but both identifiers access the same underlying message
   queue.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.msg-get-queue-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">key</code></dt>
     <dd>
      <p class="para">
       Message queue numeric ID
      </p>
     </dd>
    
    
     <dt><code class="parameter">permissions</code></dt>
     <dd>
      <p class="para">
       Queue permissions. Default to 0666. If the message queue already
       exists, the <code class="parameter">permissions</code> will be ignored.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.msg-get-queue-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <span class="classname"><a href="class.sysvmessagequeue.php" class="classname">SysvMessageQueue</a></span> instance that can be used to access the System V message queue,
    or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.msg-get-queue-changelog">
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
        On success, this function returns a <span class="classname"><a href="class.sysvmessagequeue.php" class="classname">SysvMessageQueue</a></span> instance now;
        previously, a <span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span> was returned.
       </td>
      </tr>

     </tbody>
    
   </table>

  </p>
 </div>

 
 <div class="refsect1 seealso" id="refsect1-function.msg-get-queue-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.msg-remove-queue.php" class="function" rel="rdfs-seeAlso">msg_remove_queue()</a> - Destroy a message queue</span></li>
    <li><span class="function"><a href="function.msg-receive.php" class="function" rel="rdfs-seeAlso">msg_receive()</a> - Receive a message from a message queue</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/sem/functions/msg-get-queue.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.msg-get-queue%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.msg-get-queue&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.msg-get-queue.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">5 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="87703">  <div class="votes">
    <div id="Vu87703">
    <a href="/manual/vote-note.php?id=87703&amp;page=function.msg-get-queue&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd87703">
    <a href="/manual/vote-note.php?id=87703&amp;page=function.msg-get-queue&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V87703" title="61% like this...">
    3
    </div>
  </div>
  <a href="#87703" class="name">
  <strong class="user"><em>david dot schueler at tel-billig dot de</em></strong></a><a class="genanchor" href="#87703"> &para;</a><div class="date" title="2008-12-17 08:17"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom87703">
<div class="phpcode"><code><span class="html">If you are getting this message on your *NIX box:<br /><br />Warning: msg_get_queue() [function.msg-get-queue]: failed for key 0x12345678: No space left on device in /path/to/script.php on line 1<br /><br />you may use the command "ipcrm" as root to clear the message queue. Use "man ipcrm" to get more info on it.<br />The default setting for maximum messages in the queue is stored in /proc/sys/fs/mqueue/msg_max. To increase it to a maximum of 100 messages, just run:<br />echo 100 &gt; /proc/sys/fs/mqueue/msg_max<br /><br />Please ensure to follow a good programming style and close/free all your message queues before your script exits to avoid those warning messages.</span></code></div>
  </div>
 </div>
  <div class="note" id="89260">  <div class="votes">
    <div id="Vu89260">
    <a href="/manual/vote-note.php?id=89260&amp;page=function.msg-get-queue&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd89260">
    <a href="/manual/vote-note.php?id=89260&amp;page=function.msg-get-queue&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V89260" title="55% like this...">
    2
    </div>
  </div>
  <a href="#89260" class="name">
  <strong class="user"><em>pail dot luo at gmail dot com</em></strong></a><a class="genanchor" href="#89260"> &para;</a><div class="date" title="2009-02-28 09:22"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom89260">
<div class="phpcode"><code><span class="html">A simple Sample to introduce Message Queue. <br /><br /><span class="default">&lt;?php <br /></span><span class="keyword">if ( </span><span class="default">sizeof</span><span class="keyword">(</span><span class="default">$argv</span><span class="keyword">)&lt;</span><span class="default">2 </span><span class="keyword">) { <br />        echo </span><span class="string">"Usage: </span><span class="default">$argv</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]</span><span class="string"> stat|send|receive|remove msgType MSG [msg] \n\n" </span><span class="keyword">; <br />        echo </span><span class="string">"   EX: </span><span class="default">$argv</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]</span><span class="string"> send 1 \"This is no 1\" \n" </span><span class="keyword">; <br />        echo </span><span class="string">"       </span><span class="default">$argv</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]</span><span class="string"> receive ID \n" </span><span class="keyword">; <br />        echo </span><span class="string">"       </span><span class="default">$argv</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]</span><span class="string"> stat \n" </span><span class="keyword">; <br />        echo </span><span class="string">"       </span><span class="default">$argv</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]</span><span class="string"> remove \n" </span><span class="keyword">; <br />        exit; <br />} <br /><br /></span><span class="default">$MSGKey </span><span class="keyword">= </span><span class="string">"123456" </span><span class="keyword">; <br /><br /></span><span class="comment">## Create or attach to a message queue <br /></span><span class="default">$seg </span><span class="keyword">= </span><span class="default">msg_get_queue</span><span class="keyword">(</span><span class="default">$MSGKey</span><span class="keyword">) ; <br /><br />switch ( </span><span class="default">$argv</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] ) { <br />    case </span><span class="string">"send"</span><span class="keyword">: <br />        </span><span class="default">msg_send</span><span class="keyword">(</span><span class="default">$seg</span><span class="keyword">, </span><span class="default">$argv</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">], </span><span class="default">$argv</span><span class="keyword">[</span><span class="default">3</span><span class="keyword">]); <br />        echo </span><span class="string">"msg_send done...\n" </span><span class="keyword">; <br />        break; <br />        <br />    case </span><span class="string">"receive"</span><span class="keyword">: <br />        </span><span class="default">$stat </span><span class="keyword">= </span><span class="default">msg_stat_queue</span><span class="keyword">( </span><span class="default">$seg </span><span class="keyword">); <br />        echo </span><span class="string">'Messages in the queue: '</span><span class="keyword">.</span><span class="default">$stat</span><span class="keyword">[</span><span class="string">'msg_qnum'</span><span class="keyword">].</span><span class="string">"\n"</span><span class="keyword">; <br />        if ( </span><span class="default">$stat</span><span class="keyword">[</span><span class="string">'msg_qnum'</span><span class="keyword">]&gt;</span><span class="default">0 </span><span class="keyword">) { <br />            </span><span class="default">msg_receive</span><span class="keyword">(</span><span class="default">$seg</span><span class="keyword">, </span><span class="default">$argv</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">], </span><span class="default">$msgtype</span><span class="keyword">, </span><span class="default">1024</span><span class="keyword">, </span><span class="default">$data</span><span class="keyword">); <br />            </span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$msgtype</span><span class="keyword">); <br />            </span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">); <br />            echo </span><span class="string">"\n"</span><span class="keyword">; <br />        } <br />        else { <br />            echo </span><span class="string">"No Msg...\n"</span><span class="keyword">; <br />        } <br />        break; <br />    <br />    case </span><span class="string">"stat"</span><span class="keyword">: <br />      </span><span class="default">print_r</span><span class="keyword">( </span><span class="default">msg_stat_queue</span><span class="keyword">(</span><span class="default">$seg</span><span class="keyword">) ); <br />        break; <br />        <br />    case </span><span class="string">"remove"</span><span class="keyword">: <br />        </span><span class="default">msg_remove_queue</span><span class="keyword">(</span><span class="default">$seg</span><span class="keyword">); <br />        break; <br />} <br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="98726">  <div class="votes">
    <div id="Vu98726">
    <a href="/manual/vote-note.php?id=98726&amp;page=function.msg-get-queue&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd98726">
    <a href="/manual/vote-note.php?id=98726&amp;page=function.msg-get-queue&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V98726" title="66% like this...">
    1
    </div>
  </div>
  <a href="#98726" class="name">
  <strong class="user"><em>Michael Iatrou</em></strong></a><a class="genanchor" href="#98726"> &para;</a><div class="date" title="2010-07-02 09:47"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom98726">
<div class="phpcode"><code><span class="html">If you are getting the following message (on Linux):
<br />
<br />Warning: msg_get_queue() [function.msg-get-queue]: failed for key 0x12345678: No space left on device in /path/to/script.php on line 1
<br />
<br />aside from what [others have] suggested, you should also check and set an appropriate value for kernel parameter kernel.msgmni, e.g. sysctl -w kernel.msgmni=256</span></code></div>
  </div>
 </div>
  <div class="note" id="124056">  <div class="votes">
    <div id="Vu124056">
    <a href="/manual/vote-note.php?id=124056&amp;page=function.msg-get-queue&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124056">
    <a href="/manual/vote-note.php?id=124056&amp;page=function.msg-get-queue&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124056" title="100% like this...">
    1
    </div>
  </div>
  <a href="#124056" class="name">
  <strong class="user"><em>Joey</em></strong></a><a class="genanchor" href="#124056"> &para;</a><div class="date" title="2019-07-22 11:10"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom124056">
<div class="phpcode"><code><span class="html">I find it hard to work out how to really use this reliably particularly in respect to collisions.<br /><br />It maps to SysV IPC msgget.<br /><br />As I see it you have three options...<br /><br />1. Manage the IDs yourself, allocating various ranges or using some kind of centralised mechanism.<br />2. Use ftok. This attempts to find a unique ID, though it's not guaranteed to be unique or constant in absolutely every circumstance. It relies on using a file, from which it uses bits from the inode and dev it expects to be unique. It's the standard way and as long as there's nothing too unusual it should probably work (but might not survive radical FS changes).<br />3. Use 0 as the key, which appears to map to IPC_PRIVATE, a magic value which if provided as a key creates a new queue each time (without a key in effect).<br /><br />Unfortunately option #3 is of limited use in PHP.<br /><br />In C that is useful might be useful as the queue resource is just identified by an int and can be passed around.<br /><br />In PHP its utility is questionable as only the resource can be passed within a single process. It's not possible to pass the resource with serialize / unserialize even though it's just a wrapped int.<br /><br />The msqid returned isn't exactly unpredictable either so can quite easily be accidentally accessed. The first one I got was 0.<br /><br />If you create a queue like this you'll find it very annoying as it wont be possible to delete it via PHP.<br /><br />Like all IO it's worth wrapping this function and launching an exception if the input is 0.</span></code></div>
  </div>
 </div>
  <div class="note" id="76826">  <div class="votes">
    <div id="Vu76826">
    <a href="/manual/vote-note.php?id=76826&amp;page=function.msg-get-queue&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd76826">
    <a href="/manual/vote-note.php?id=76826&amp;page=function.msg-get-queue&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V76826" title="50% like this...">
    0
    </div>
  </div>
  <a href="#76826" class="name">
  <strong class="user"><em>martin dot velek at gmail dot com</em></strong></a><a class="genanchor" href="#76826"> &para;</a><div class="date" title="2007-08-01 04:23"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom76826">
<div class="phpcode"><code><span class="html">Lack of IPC_EXCL makes me unhappy. Of course, you can use ftok() to generate a unique key. This code is not allmighty, another process under the same user can open the queue and function returns true. But in some situation it could help.<br /><br />code:<br /><br />&lt;?<br />function ipcEXCL($res,$perm)<br />{<br /> $pole = msg_stat_queue($res);<br /> <br /> if($pole['msg_perm.uid']==posix_getuid() &amp;&amp;<br />    $pole['msg_perm.gid']==posix_getgid()  &amp;&amp;<br />    $pole['msg_perm.mode']==$perm  &amp;&amp;<br />    $pole['msg_stime']==0  &amp;&amp;<br />    $pole['msg_rtime']==0  &amp;&amp;<br />    $pole['msg_qnum']==0  &amp;&amp;<br />    $pole['msg_lspid']==0  &amp;&amp;<br />    $pole['msg_rspid']==0)<br />        return true;<br /> else<br />        return false;<br />}<br /><br />$res=msg_get_queue($key,$perm);<br /><br />if(ipcEXCL($res,$perm))<br />   echo "probably I am a creator:";<br />else<br />   echo "probably not";<br />?&gt;</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.msg-get-queue&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.msg-get-queue.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.sem.php">Semaphore Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.ftok.php" title="ftok">ftok</a>
                        </li>
                                                <li class="current">
                            <a href="function.msg-get-queue.php" title="msg_&#8203;get_&#8203;queue">msg_&#8203;get_&#8203;queue</a>
                        </li>
                                                <li class="">
                            <a href="function.msg-queue-exists.php" title="msg_&#8203;queue_&#8203;exists">msg_&#8203;queue_&#8203;exists</a>
                        </li>
                                                <li class="">
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
