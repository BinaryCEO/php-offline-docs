<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: List of php.ini sections - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/ini.sections.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/ini.sections.php">
 <link rel="alternate" href="https://www.php.net/manual/en/ini.sections.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ini.php">
 <link rel="prev" href="https://www.php.net/manual/en/ini.list.php">
 <link rel="next" href="https://www.php.net/manual/en/ini.core.php">

 <link rel="alternate" href="https://www.php.net/manual/en/ini.sections.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/ini.sections.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/ini.sections.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/ini.sections.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/ini.sections.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/ini.sections.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/ini.sections.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/ini.sections.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/ini.sections.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/ini.sections.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/ini.sections.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="List of php.ini sections" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: List of php.ini sections - Manual" />
<meta name="twitter:description" content="List of php.ini sections" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: List of php.ini sections - Manual" />
<meta itemprop="description" content="List of php.ini sections" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="List of php.ini sections" />

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
        <a href="ini.core.php">
          Description of core php.ini directives &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="ini.list.php">
          &laquo; List of php.ini directives        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='appendices.php'>Appendices</a></li>      <li><a href='ini.php'>php.ini directives</a></li>      </ul>
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
            <option value='en/ini.sections.php' selected="selected">English</option>
            <option value='de/ini.sections.php'>German</option>
            <option value='es/ini.sections.php'>Spanish</option>
            <option value='fr/ini.sections.php'>French</option>
            <option value='it/ini.sections.php'>Italian</option>
            <option value='ja/ini.sections.php'>Japanese</option>
            <option value='pt_BR/ini.sections.php'>Brazilian Portuguese</option>
            <option value='ru/ini.sections.php'>Russian</option>
            <option value='tr/ini.sections.php'>Turkish</option>
            <option value='uk/ini.sections.php'>Ukrainian</option>
            <option value='zh/ini.sections.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="ini.sections" class="section">
  <h2 class="title">List of <var class="filename">php.ini</var> sections</h2>
  <p class="para">
   This list includes the <var class="filename">php.ini</var> sections you can set to configure your
   PHP setup on a per Host or Path basis. These sections are optional.
  </p>
  <p class="para">
   These sections don&#039;t directly affect PHP. They are used to group other
   <var class="filename">php.ini</var> directives together and to get them to act upon a particular host
   or on a particular path.
  </p>
  <p class="para">
   These sections are used only in CGI/FastCGI mode and they can not set
   <a href="ini.core.php#ini.extension" class="link">extension</a> and <a href="ini.core.php#ini.zend-extension" class="link">zend_extension</a> directives.
  </p>
  <p class="para">
   <table class="doctable table">
    <caption><strong>Sections</strong></caption>
    
     <thead>
      <tr>
       <th>Name</th>
       <th>Changeable</th>
       <th>Changelog</th>
      </tr>

     </thead>

     <tbody class="tbody">
      <tr>
       <td><a href="ini.sections.php#ini.per-host" class="link">[HOST=]</a></td>
       <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
       <td class="empty">&nbsp;</td>
      </tr>

      <tr>
       <td><a href="ini.sections.php#ini.per-path" class="link">[PATH=]</a></td>
       <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
       <td class="empty">&nbsp;</td>
      </tr>

     </tbody>
    
   </table>

  </p>
  
  <p class="para">Here&#039;s a short explanation of
the configuration directives.</p>
  
  <p class="para">
   <dl>
    
     <dt id="ini.per-host">
      <code class="parameter">[HOST=&lt;host&gt;]</code>
     </dt>
     <dd>
      <p class="para">
       This section allows you to define a set of <var class="filename">php.ini</var> directives that
       will take effect on the named host.
      </p>
      <p class="para">
       <div class="example" id="example-5946">
        <p><strong>Example #1 Activate full on-screen error reporting for dev. domain</strong></p>
        <div class="example-contents">
<div class="php.inicode"><pre class="php.inicode">[HOST=dev.site.com]
error_reporting = E_ALL
display_errors = On</pre>
</div>
        </div>

       </div>
      </p>
     </dd>
    
    
    
     <dt id="ini.per-path">
      <code class="parameter">[PATH=&lt;path&gt;]</code>
     </dt>
     <dd>
      <p class="para">
       This section allows you to define a set of <var class="filename">php.ini</var> directives that
       will take effect when a script runs from the named path.
      </p>
      <p class="para">
       <div class="example" id="example-5947">
        <p><strong>Example #2 Add security script for protected areas</strong></p>
        <div class="example-contents">
<div class="php.inicode"><pre class="php.inicode">[PATH=/home/site/public/secure]
auto_prepend_file=security.php</pre>
</div>
        </div>

       </div>
      </p>
     </dd>
    
    
   </dl>
  </p>
 </div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/appendices/ini.sections.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fini.sections%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=ini.sections&amp;repo=en&amp;redirect=https://www.php.net/manual/en/ini.sections.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">8 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="93733">  <div class="votes">
    <div id="Vu93733">
    <a href="/manual/vote-note.php?id=93733&amp;page=ini.sections&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd93733">
    <a href="/manual/vote-note.php?id=93733&amp;page=ini.sections&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V93733" title="58% like this...">
    9
    </div>
  </div>
  <a href="#93733" class="name">
  <strong class="user"><em>public at grik dot net</em></strong></a><a class="genanchor" href="#93733"> &para;</a><div class="date" title="2009-09-24 03:00"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom93733">
<div class="phpcode"><code><span class="html">In [HOST=...] one should use only the 1st server name from the list of server names.<br /><br />I.E. if you have <br />server_name example.com, example2.com;<br />and will use www.example.com in a browser, <br />use [HOST=example.com] in php.ini for both addresses.<br /><br />PHP looks not at the HOST request header (as I expected), but at the SERVER_NAME parameter (which by default is the 1st from the list of names, no matter what the HOST is).</span></code></div>
  </div>
 </div>
  <div class="note" id="122654">  <div class="votes">
    <div id="Vu122654">
    <a href="/manual/vote-note.php?id=122654&amp;page=ini.sections&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122654">
    <a href="/manual/vote-note.php?id=122654&amp;page=ini.sections&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122654" title="60% like this...">
    4
    </div>
  </div>
  <a href="#122654" class="name">
  <strong class="user"><em>robinhook at mail dot com</em></strong></a><a class="genanchor" href="#122654"> &para;</a><div class="date" title="2018-04-22 06:59"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122654">
<div class="phpcode"><code><span class="html">this HOST and PATH sections doesn't seems to work in php.ini under apache 2.4 with php-fpm 7.1.16 for directive php_value or php_admin_value open_basedir or include_path.<br />phpinfo() says "none" in master and local values.</span></code></div>
  </div>
 </div>
  <div class="note" id="99780">  <div class="votes">
    <div id="Vu99780">
    <a href="/manual/vote-note.php?id=99780&amp;page=ini.sections&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd99780">
    <a href="/manual/vote-note.php?id=99780&amp;page=ini.sections&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V99780" title="58% like this...">
    4
    </div>
  </div>
  <a href="#99780" class="name">
  <strong class="user"><em>crash at lubyte dot de</em></strong></a><a class="genanchor" href="#99780"> &para;</a><div class="date" title="2010-09-06 05:45"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom99780">
<div class="phpcode"><code><span class="html">If you have a system which uses separated PHP inis for loading extensions (Debian, Fedora and most other distributions do so), [PATH=] or [HOST=] will prevent loading extensions defined in those ini files (extension= and zend_extension=).<br /><br />I had some headache, when I added a hosts.ini to /etc/php5/cgi/conf.d (Debians default), where I wanted to define some defaults for a host name. The manual says extension= and zend_extension= aren't allowed in [HOST=] and [PATH=] (see above). I figured out that you can easily fix that with adding [PHP] after your definitions.<br /><br />For example hosts.ini:<br />[HOST=dev.example.com]<br />display_errors = on<br /><br />[PHP]<br /><br />this will change the section back to [PHP] where extension= and zend_extension= is allowed.</span></code></div>
  </div>
 </div>
  <div class="note" id="124709">  <div class="votes">
    <div id="Vu124709">
    <a href="/manual/vote-note.php?id=124709&amp;page=ini.sections&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124709">
    <a href="/manual/vote-note.php?id=124709&amp;page=ini.sections&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124709" title="57% like this...">
    2
    </div>
  </div>
  <a href="#124709" class="name">
  <strong class="user"><em>dasloch at absatzen dot de</em></strong></a><a class="genanchor" href="#124709"> &para;</a><div class="date" title="2020-02-12 12:47"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom124709">
<div class="phpcode"><code><span class="html">Note that you cannot usefully set syslog.* in [PATH=] (and probably [HOST=]) sections, since the syslogger is initialized only once per php-fpm worker process, and not per request.</span></code></div>
  </div>
 </div>
  <div class="note" id="122655">  <div class="votes">
    <div id="Vu122655">
    <a href="/manual/vote-note.php?id=122655&amp;page=ini.sections&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122655">
    <a href="/manual/vote-note.php?id=122655&amp;page=ini.sections&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122655" title="56% like this...">
    2
    </div>
  </div>
  <a href="#122655" class="name">
  <strong class="user"><em>robinhook at mail dot com</em></strong></a><a class="genanchor" href="#122655"> &para;</a><div class="date" title="2018-04-22 07:14"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122655">
<div class="phpcode"><code><span class="html">Sorry for the note. I've read some bad tutorials.<br />The correct syntax is : directive = 'value'<br />not a thing like : php_value[directive] = "somevalue"</span></code></div>
  </div>
 </div>
  <div class="note" id="103840">  <div class="votes">
    <div id="Vu103840">
    <a href="/manual/vote-note.php?id=103840&amp;page=ini.sections&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd103840">
    <a href="/manual/vote-note.php?id=103840&amp;page=ini.sections&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V103840" title="52% like this...">
    3
    </div>
  </div>
  <a href="#103840" class="name">
  <strong class="user"><em>leo</em></strong></a><a class="genanchor" href="#103840"> &para;</a><div class="date" title="2011-05-06 03:21"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom103840">
<div class="phpcode"><code><span class="html">Just developed the probably first php.ini hack to add commands which will only be parsed before PHP 5.3 when using mod_php.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment"># Disable eAccelerator by default<br /></span><span class="default">eaccelerator</span><span class="keyword">.</span><span class="default">enable </span><span class="keyword">= </span><span class="default">0<br /><br /></span><span class="comment"># Now, to prevent incompatibilities with Zend Optimizer+, we<br /># want to enable eAccelerator only in PHP 5.2 or lower.<br /></span><span class="keyword">[</span><span class="default">HOST</span><span class="keyword">=*]<br /></span><span class="default">eaccelerator</span><span class="keyword">.</span><span class="default">enable </span><span class="keyword">= </span><span class="default">1<br /><br />?&gt;<br /></span><br />What is happening here? In PHP 5.3, php.ini sections to set up PHP on a per host basis have been introduced:<br /><br /><a href="http://www.php.net/manual/en/ini.sections.php" rel="nofollow" target="_blank">http://www.php.net/manual/en/ini.sections.php</a><br /><br />These sections only work in CGI/FastCGI mode, however there still seems to be a difference in how the php.ini file is parsed in PHP 5.2 and PHP 5.3 when using mod_php: PHP 5.3 ignores everything below the line [HOST=*], whereas PHP 5.2 does not.<br /><br />In the above example, PHP 5.3 only reads "eaccelerator.enable = 0" and then stops at the invalid command [HOST=*]. However, PHP 5.2 seems to ignore the invalid command and parses the whole configuration file, ending up with "eaccelerator.enable = 1".</span></code></div>
  </div>
 </div>
  <div class="note" id="105240">  <div class="votes">
    <div id="Vu105240">
    <a href="/manual/vote-note.php?id=105240&amp;page=ini.sections&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd105240">
    <a href="/manual/vote-note.php?id=105240&amp;page=ini.sections&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V105240" title="52% like this...">
    2
    </div>
  </div>
  <a href="#105240" class="name">
  <strong class="user"><em>z dot himdi at bita dot nl</em></strong></a><a class="genanchor" href="#105240"> &para;</a><div class="date" title="2011-08-04 07:53"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom105240">
<div class="phpcode"><code><span class="html">On Windows IIS 7 server I noticed that [PATH=] was not listened to. [HOST=] however worked.</span></code></div>
  </div>
 </div>
  <div class="note" id="97287">  <div class="votes">
    <div id="Vu97287">
    <a href="/manual/vote-note.php?id=97287&amp;page=ini.sections&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd97287">
    <a href="/manual/vote-note.php?id=97287&amp;page=ini.sections&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V97287" title="50% like this...">
    0
    </div>
  </div>
  <a href="#97287" class="name">
  <strong class="user"><em>robert dot johnson at icap dot com</em></strong></a><a class="genanchor" href="#97287"> &para;</a><div class="date" title="2010-04-12 10:26"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom97287">
<div class="phpcode"><code><span class="html">Adding PATH= applies only to the named path and does not include sub-directories, you have to add a PATH= value for each sub-directory.<br /><br />Also some settings have no effect even though phpinfo recognises and displays the per-folder value as the 'local' value, and the default as the 'master' value.<br /><br />'fastcgi.impersonate' always uses the master setting.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=ini.sections&amp;repo=en&amp;redirect=https://www.php.net/manual/en/ini.sections.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ini.php">php.ini directives</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="ini.list.php" title="List of php.ini directives">List of php.ini directives</a>
                        </li>
                                                <li class="current">
                            <a href="ini.sections.php" title="List of php.ini sections">List of php.ini sections</a>
                        </li>
                                                <li class="">
                            <a href="ini.core.php" title="Description of core php.ini directives">Description of core php.ini directives</a>
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
