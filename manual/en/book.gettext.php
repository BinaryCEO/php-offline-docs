<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Gettext - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/book.gettext.php">
 <link rel="shorturl" href="https://www.php.net/gettext">
 <link rel="alternate" href="https://www.php.net/gettext" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/refs.international.php">
 <link rel="prev" href="https://www.php.net/manual/en/gender-gender.similarnames.php">
 <link rel="next" href="https://www.php.net/manual/en/intro.gettext.php">

 <link rel="alternate" href="https://www.php.net/manual/en/book.gettext.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/book.gettext.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/book.gettext.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/book.gettext.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/book.gettext.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/book.gettext.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/book.gettext.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/book.gettext.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/book.gettext.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/book.gettext.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/book.gettext.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Gettext" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Gettext - Manual" />
<meta name="twitter:description" content="Gettext" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Gettext - Manual" />
<meta itemprop="description" content="Gettext" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Gettext" />

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
        <a href="intro.gettext.php">
          Introduction &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="gender-gender.similarnames.php">
          &laquo; Gender\Gender::similarNames        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.international.php'>Human Language and Character Encoding Support</a></li>      </ul>
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
            <option value='en/book.gettext.php' selected="selected">English</option>
            <option value='de/book.gettext.php'>German</option>
            <option value='es/book.gettext.php'>Spanish</option>
            <option value='fr/book.gettext.php'>French</option>
            <option value='it/book.gettext.php'>Italian</option>
            <option value='ja/book.gettext.php'>Japanese</option>
            <option value='pt_BR/book.gettext.php'>Brazilian Portuguese</option>
            <option value='ru/book.gettext.php'>Russian</option>
            <option value='tr/book.gettext.php'>Turkish</option>
            <option value='uk/book.gettext.php'>Ukrainian</option>
            <option value='zh/book.gettext.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="book.gettext" class="book">
 
 <h1 class="title">Gettext</h1>

 
 
 

 







 








<ul class="chunklist chunklist_book"><li><a href="intro.gettext.php">Introduction</a></li><li><a href="gettext.setup.php">Installing/Configuring</a><ul class="chunklist chunklist_book chunklist_children"><li><a href="gettext.requirements.php">Requirements</a></li><li><a href="gettext.installation.php">Installation</a></li></ul></li><li><a href="ref.gettext.php">Gettext Functions</a><ul class="chunklist chunklist_book chunklist_children"><li><a href="function.-.php">_</a> — Alias of gettext</li><li><a href="function.bind-textdomain-codeset.php">bind_textdomain_codeset</a> — Specify or get the character encoding in which the messages from the DOMAIN message catalog will be returned</li><li><a href="function.bindtextdomain.php">bindtextdomain</a> — Sets or gets the path for a domain</li><li><a href="function.dcgettext.php">dcgettext</a> — Overrides the domain for a single lookup</li><li><a href="function.dcngettext.php">dcngettext</a> — Plural version of dcgettext</li><li><a href="function.dgettext.php">dgettext</a> — Override the current domain</li><li><a href="function.dngettext.php">dngettext</a> — Plural version of dgettext</li><li><a href="function.gettext.php">gettext</a> — Lookup a message in the current domain</li><li><a href="function.ngettext.php">ngettext</a> — Plural version of gettext</li><li><a href="function.textdomain.php">textdomain</a> — Sets the default domain</li></ul></li></ul></div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/gettext/book.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fbook.gettext%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=book.gettext&amp;repo=en&amp;redirect=https://www.php.net/manual/en/book.gettext.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">11 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="122509">  <div class="votes">
    <div id="Vu122509">
    <a href="/manual/vote-note.php?id=122509&amp;page=book.gettext&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122509">
    <a href="/manual/vote-note.php?id=122509&amp;page=book.gettext&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122509" title="73% like this...">
    56
    </div>
  </div>
  <a href="#122509" class="name">
  <strong class="user"><em>marioandrea dot petruccelli at gmail dot com</em></strong></a><a class="genanchor" href="#122509"> &para;</a><div class="date" title="2018-03-14 09:54"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122509">
<div class="phpcode"><code><span class="html">How to use gettext on Windows.<br /><br />If you use Linux start from the step 2 and consider cmd as linux shell.<br /><br />1] First you have to download and install this <br />      <a href="https://mlocati.github.io/articles/gettext-iconv-windows.html" rel="nofollow" target="_blank">https://mlocati.github.io/articles/gettext-iconv-windows.html</a><br />   <br />    Check all options during the installation and go on.   <br /> <br /><br />2] Create a index.php file into your website directory with this code inside:<br />  <br />   <span class="default">&lt;?php <br />    </span><span class="keyword">echo  </span><span class="default">_</span><span class="keyword">(</span><span class="string">"Good Morning"</span><span class="keyword">);<br />    </span><span class="default">?&gt;<br /></span><br />3] Open cmd and move into your website folder using cd<br /><br />4] Now create the .mo files directly from the php files using this command<br />    xgettext -n index.php<br />   <br />    Use xgettext -help to see how to include more php files.<br /><br />5] Once finished will be generate a file called messages.mo. Now you have to set the language and the charset. Open messages.mo with notepad and edit the lines:<br /><br /> - "Language: \n" BECOMES "Language fr\n"<br /> - "Content-Type: text/plain; charset=CHARSET\n" BECOMES "Content-Type: text/plain; charset=UTF-8\n"<br /><br />6] Remember to translate every line where is present msgstr "", translating the instance msgid into language you have chosen. For instance:<br /><br />   #: index.php:2<br />  msgid "Good Morning"<br />  msgstr "Bonjour"<br /><br />7] Once finished open cmd and move into your website folder using cd and then type<br />     msgfmt messages.po<br /><br /> This will make a file called messages.mo . Is a binary version of the messages.po file<br /><br />8] Now you have to create a folder structure like this into your website folder. Do this for each language you want to add.<br />    <br />  website/locale/fr_FR/LC_MESSAGES<br /><br />9] Move messages.mo and messages.po in locale/fr_FR/LC_MESSAGES <br />                <br />10] Now edit the index.php as follows<br />                                        <br /> <span class="default">&lt;?php<br /><br /> $locale </span><span class="keyword">= </span><span class="string">"fr_FR"</span><span class="keyword">;<br /><br />    if (</span><span class="default">defined</span><span class="keyword">(</span><span class="string">'LC_MESSAGES'</span><span class="keyword">)) {<br />        </span><span class="default">setlocale</span><span class="keyword">(</span><span class="default">LC_MESSAGES</span><span class="keyword">, </span><span class="default">$locale</span><span class="keyword">); </span><span class="comment">// Linux<br />        </span><span class="default">bindtextdomain</span><span class="keyword">(</span><span class="string">"messages"</span><span class="keyword">, </span><span class="string">"./locale"</span><span class="keyword">);<br />    } else {<br />        </span><span class="default">putenv</span><span class="keyword">(</span><span class="string">"LC_ALL=</span><span class="keyword">{</span><span class="default">$locale</span><span class="keyword">}</span><span class="string">"</span><span class="keyword">); </span><span class="comment">// windows<br />        </span><span class="default">bindtextdomain</span><span class="keyword">(</span><span class="string">"messages"</span><span class="keyword">, </span><span class="string">".\locale"</span><span class="keyword">);<br />    }<br /><br />    <br />    </span><span class="default">textdomain</span><span class="keyword">(</span><span class="string">"messages"</span><span class="keyword">);<br /><br />    echo </span><span class="default">_</span><span class="keyword">(</span><span class="string">"Good Morning"</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />11] Open index.php in your browser and if you will see "Bonjour" it means everything is okay. If not,  start from the step 2 again.<br /><br />If it was usefull for you vote up!<br /><br />Visit my github profile <a href="https://github.com/TheoRelativity/" rel="nofollow" target="_blank">https://github.com/TheoRelativity/</a></span></code></div>
  </div>
 </div>
  <div class="note" id="91187">  <div class="votes">
    <div id="Vu91187">
    <a href="/manual/vote-note.php?id=91187&amp;page=book.gettext&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd91187">
    <a href="/manual/vote-note.php?id=91187&amp;page=book.gettext&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V91187" title="72% like this...">
    22
    </div>
  </div>
  <a href="#91187" class="name">
  <strong class="user"><em>jpatokal at iki dot fi</em></strong></a><a class="genanchor" href="#91187"> &para;</a><div class="date" title="2009-05-29 12:05"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom91187">
<div class="phpcode"><code><span class="html">Warning for Linux (Ubuntu) users!  Your system will *only* support the locales installed on your OS, in the *exact* format given by your OS.  (See also the PHP setlocale man page.)  To get a list of them, enter locale -a, which will give you something like this:<br /><br />C<br />en_US.utf8<br />ja_JP.utf8<br />POSIX<br /><br />So this machine only has English and Japanese!  To add eg. Finnish, install the package:<br /><br />sudo apt-get install language-pack-fi-base<br /><br />Rerun locale -a, and "fi_FI.utf8" should appear.  Make sure you're using the same name in your PHP code:<br /><br />setlocale(LC_ALL, "fi_FI.utf8");<br /><br />Adjust your po paths so that they match, e.g. "./locale/fi_FI.utf8/LC_MESSAGES/messages.po".<br /><br />Now restart Apache, and it should finally work.  Figuring this out took quite a while...</span></code></div>
  </div>
 </div>
  <div class="note" id="89975">  <div class="votes">
    <div id="Vu89975">
    <a href="/manual/vote-note.php?id=89975&amp;page=book.gettext&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd89975">
    <a href="/manual/vote-note.php?id=89975&amp;page=book.gettext&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V89975" title="64% like this...">
    17
    </div>
  </div>
  <a href="#89975" class="name">
  <strong class="user"><em>sasq1 at go2 dot pl</em></strong></a><a class="genanchor" href="#89975"> &para;</a><div class="date" title="2009-03-31 10:18"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom89975">
<div class="phpcode"><code><span class="html">And what about pgettext and npgettext? They are there in the gettext documentation, but there aren't in PHP. They're very useful if you have the same messages for translation, but in different contexts, so they should be translated separately and probably differently.<br /><br />Fortunately, there is a simple work-around, which may help:<br />From the gettext.h header one can find out that pgettext() is only a macro calling dcgettext() internally with properly mangled parameters - msgctxt and msgid are glued together with use of ASCII char 4 [EOT, End Of Text]. The same way they're written in .mo files, so it's possible to refer them this way.<br /><br />Here's my "emulated" pgettext() function:<br /><br /><span class="default">&lt;?php<br />   </span><span class="keyword">if (!</span><span class="default">function_exists</span><span class="keyword">(</span><span class="string">'pgettext'</span><span class="keyword">)) {<br />      <br />      function </span><span class="default">pgettext</span><span class="keyword">(</span><span class="default">$context</span><span class="keyword">, </span><span class="default">$msgid</span><span class="keyword">)<br />      {<br />         </span><span class="default">$contextString </span><span class="keyword">= </span><span class="string">"</span><span class="keyword">{</span><span class="default">$context</span><span class="keyword">}</span><span class="string">\004</span><span class="keyword">{</span><span class="default">$msgid</span><span class="keyword">}</span><span class="string">"</span><span class="keyword">;<br />         </span><span class="default">$translation </span><span class="keyword">= </span><span class="default">dcgettext</span><span class="keyword">(</span><span class="string">'messages'</span><span class="keyword">, </span><span class="default">contextString</span><span class="keyword">,</span><span class="default">LC_MESSAGES</span><span class="keyword">);<br />         if (</span><span class="default">$translation </span><span class="keyword">== </span><span class="default">$contextString</span><span class="keyword">)  return </span><span class="default">$msgid</span><span class="keyword">;<br />         else  return </span><span class="default">$translation</span><span class="keyword">;<br />      }<br />      <br />   }<br /></span><span class="default">?&gt;<br /></span><br />By default, xgettext doesn't support pgettext function for PHP source files. But there is a parameter which can work-around it. Here's how I call xgettext:<br /><br />   xgettext --force-po --keyword="pgettext:1c,2" -c -o messages.po sourceFile.php<br /><br />In sourceFile.php I use the following test code:<br /><br />   pgettext('menu', 'Open');  //Substitute "Otwórz"<br />   pgettext('forum', 'Open');  //Substitute "Otwarty", different context<br /><br />Generated .po file fragment:<br /><br />   msgctxt "menu"<br />   msgid "Open"<br />   msgstr "Otwórz"<br />   <br />   msgctxt "forum"<br />   msgctxt "Open"<br />   msgstr "Otwarty"<br /><br />I've tested it out and everything works fine :-) If anyone have some further suggestions or fixes, please write ;-)</span></code></div>
  </div>
 </div>
  <div class="note" id="89696">  <div class="votes">
    <div id="Vu89696">
    <a href="/manual/vote-note.php?id=89696&amp;page=book.gettext&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd89696">
    <a href="/manual/vote-note.php?id=89696&amp;page=book.gettext&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V89696" title="66% like this...">
    4
    </div>
  </div>
  <a href="#89696" class="name">
  <strong class="user"><em>rainwalker at seznam dot cz</em></strong></a><a class="genanchor" href="#89696"> &para;</a><div class="date" title="2009-03-19 09:16"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom89696">
<div class="phpcode"><code><span class="html">My PHP app was made for UTF-8 but i had a problem that gettext always returned all texts in ISO-8859-2 instead of UTF-8.<br /><br />Then i found out that you have to set locale in PHP exactly to encoding you request. So when i wanted czech UTF-8 i used:<br /><br />setlocale(LC_ALL, "cs_CZ.UTF-8");<br /><br />Now it works...</span></code></div>
  </div>
 </div>
  <div class="note" id="91650">  <div class="votes">
    <div id="Vu91650">
    <a href="/manual/vote-note.php?id=91650&amp;page=book.gettext&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd91650">
    <a href="/manual/vote-note.php?id=91650&amp;page=book.gettext&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V91650" title="59% like this...">
    12
    </div>
  </div>
  <a href="#91650" class="name">
  <strong class="user"><em>yuricardenas at gmail dot com</em></strong></a><a class="genanchor" href="#91650"> &para;</a><div class="date" title="2009-06-21 11:30"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom91650">
<div class="phpcode"><code><span class="html">*An important thing to keep in mind*:<br />Do not forget to set the charset in .po file! <br />For example:<br /><br />"Content-Type: text/plain; charset=UTF-8\n"<br /><br />Then PHP will be able to find the .mo file you generated, using msgfmt, from the .po file WITH CHARSET SET.<br /><br />Because of this I've wasted a lot of time debugging my code, testing every single little changes people suggested over this manual and Internet: <br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">//this:<br /></span><span class="default">setlocale</span><span class="keyword">( </span><span class="default">LC_MESSAGES</span><span class="keyword">, </span><span class="string">'pt_BR'</span><span class="keyword">)<br /></span><span class="comment">//or this:<br /></span><span class="default">setlocale</span><span class="keyword">( </span><span class="default">LC_MESSAGES</span><span class="keyword">, </span><span class="string">'pt_BR.utf8'</span><span class="keyword">)<br /></span><span class="comment">//or this:<br /></span><span class="default">setlocale</span><span class="keyword">( </span><span class="default">LC_MESSAGES</span><span class="keyword">, </span><span class="string">''</span><span class="keyword">)<br /><br /></span><span class="comment">//this:<br /></span><span class="default">putenv</span><span class="keyword">(</span><span class="string">"LANG=pt_BR.utf8"</span><span class="keyword">);<br /></span><span class="comment">//or this:<br /></span><span class="default">putenv</span><span class="keyword">(</span><span class="string">"LANGUAGE=pt_BR.utf8"</span><span class="keyword">);<br /><br /></span><span class="comment">//this:<br /></span><span class="default">bindtextdomain</span><span class="keyword">(</span><span class="string">'mydomain'</span><span class="keyword">, </span><span class="default">dirname</span><span class="keyword">(</span><span class="default">__FILE__</span><span class="keyword">).</span><span class="string">'/locale'</span><span class="keyword">);<br /></span><span class="comment">//or this:<br /></span><span class="default">bindtextdomain</span><span class="keyword">(</span><span class="string">"*"</span><span class="keyword">, </span><span class="default">dirname</span><span class="keyword">(</span><span class="default">__FILE__</span><span class="keyword">).</span><span class="string">'/locale'</span><span class="keyword">);<br /></span><span class="comment">//or this:<br /></span><span class="default">bindtextdomain</span><span class="keyword">(</span><span class="string">'*'</span><span class="keyword">, </span><span class="default">dirname</span><span class="keyword">(</span><span class="default">__FILE__</span><span class="keyword">).</span><span class="string">'/locale'</span><span class="keyword">);<br /><br /></span><span class="comment">//setting or not "bind_textdomain_codeset()":<br /></span><span class="default">bind_textdomain_codeset</span><span class="keyword">(</span><span class="string">"mydomain"</span><span class="keyword">, </span><span class="string">'UTF-8'</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />As well as what locale directory name to set:<br />./locale/pt_BR.UTF8/LC_MESSAGES/mydomain.mo<br />or<br />./locale/pt_BR/LC_MESSAGES/mydomain.mo<br />or<br />./locale/pt/LC_MESSAGES/mydomain.mo<br /><br />Finally, the code which brought the right translated strings (also with the correct charset) was:<br /><br /><span class="default">&lt;?php<br /><br />$directory </span><span class="keyword">= </span><span class="default">dirname</span><span class="keyword">(</span><span class="default">__FILE__</span><span class="keyword">).</span><span class="string">'/locale'</span><span class="keyword">;<br /></span><span class="default">$domain </span><span class="keyword">= </span><span class="string">'mydomain'</span><span class="keyword">;<br /></span><span class="default">$locale </span><span class="keyword">=</span><span class="string">"pt_BR.utf8"</span><span class="keyword">;<br /><br /></span><span class="comment">//putenv("LANG=".$locale); //not needed for my tests, but people say it's useful for windows<br /><br /></span><span class="default">setlocale</span><span class="keyword">( </span><span class="default">LC_MESSAGES</span><span class="keyword">, </span><span class="default">$locale</span><span class="keyword">);<br /></span><span class="default">bindtextdomain</span><span class="keyword">(</span><span class="default">$domain</span><span class="keyword">, </span><span class="default">$directory</span><span class="keyword">);<br /></span><span class="default">textdomain</span><span class="keyword">(</span><span class="default">$domain</span><span class="keyword">);<br /></span><span class="default">bind_textdomain_codeset</span><span class="keyword">(</span><span class="default">$domain</span><span class="keyword">, </span><span class="string">'UTF-8'</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />And the three directory's names worked out, using the pt_BR.utf8 locale. (My tests were made restarting Apache then trying each directory).<br /><br />I hope to help someone else not to waste as much time as I've wasted... =P<br /><br />Using:<br />Ubuntu 8.04 (hardy)<br />Apache 2.2.8<br />PHP 5.2.4-2ubuntu5.6</span></code></div>
  </div>
 </div>
  <div class="note" id="115370">  <div class="votes">
    <div id="Vu115370">
    <a href="/manual/vote-note.php?id=115370&amp;page=book.gettext&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115370">
    <a href="/manual/vote-note.php?id=115370&amp;page=book.gettext&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115370" title="57% like this...">
    3
    </div>
  </div>
  <a href="#115370" class="name">
  <strong class="user"><em>Johnny</em></strong></a><a class="genanchor" href="#115370"> &para;</a><div class="date" title="2014-07-14 09:31"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom115370">
<div class="phpcode"><code><span class="html">Please also be noticed that the server will cache the .mo file on first loading and then "seldom" reload it, so your update to .mo file will not be revealed.  Some solution to clear the cache from web is to restart the apache server, or to use another name for the textdomain everytime.  These are tedious.  I cannot find better solution yet.</span></code></div>
  </div>
 </div>
  <div class="note" id="85221">  <div class="votes">
    <div id="Vu85221">
    <a href="/manual/vote-note.php?id=85221&amp;page=book.gettext&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd85221">
    <a href="/manual/vote-note.php?id=85221&amp;page=book.gettext&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V85221" title="57% like this...">
    2
    </div>
  </div>
  <a href="#85221" class="name">
  <strong class="user"><em>php at devicenull dot org</em></strong></a><a class="genanchor" href="#85221"> &para;</a><div class="date" title="2008-08-20 07:58"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom85221">
<div class="phpcode"><code><span class="html">To get this working properly on debian, install the locales-all package.  I just spent a few hours finding a bug where it wouldn't work because that package is missing</span></code></div>
  </div>
 </div>
  <div class="note" id="125475">  <div class="votes">
    <div id="Vu125475">
    <a href="/manual/vote-note.php?id=125475&amp;page=book.gettext&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125475">
    <a href="/manual/vote-note.php?id=125475&amp;page=book.gettext&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125475" title="50% like this...">
    0
    </div>
  </div>
  <a href="#125475" class="name">
  <strong class="user"><em>cucurella at gmail dot com</em></strong></a><a class="genanchor" href="#125475"> &para;</a><div class="date" title="2020-10-29 05:27"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom125475">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br /><br /></span><span class="comment">// read directly .po files<br /><br /></span><span class="keyword">function </span><span class="default">T_</span><span class="keyword">(</span><span class="default">$contenido</span><span class="keyword">) {<br /><br />    global </span><span class="default">$language</span><span class="keyword">;<br /><br />    if (</span><span class="default">$language </span><span class="keyword">== </span><span class="string">"en"</span><span class="keyword">) { </span><span class="default">$translation_file </span><span class="keyword">= </span><span class="string">"langs/en.po"</span><span class="keyword">; }<br />    if (</span><span class="default">$language </span><span class="keyword">== </span><span class="string">"es"</span><span class="keyword">) { </span><span class="default">$translation_file </span><span class="keyword">= </span><span class="string">"langs/es.po"</span><span class="keyword">; }<br /><br />    if (</span><span class="default">file_exists</span><span class="keyword">(</span><span class="string">"</span><span class="default">$translation_file</span><span class="string">"</span><span class="keyword">)) {<br />        </span><span class="default">$IDIOMA_CONTENT </span><span class="keyword">= </span><span class="default">file</span><span class="keyword">(</span><span class="string">"</span><span class="default">$translation_file</span><span class="string">"</span><span class="keyword">);<br />        </span><span class="default">$num_lineas </span><span class="keyword">= </span><span class="default">count</span><span class="keyword">(</span><span class="default">$IDIOMA_CONTENT</span><span class="keyword">);<br />    } else {<br />        return </span><span class="default">$contenido</span><span class="keyword">;<br />    }<br /><br />    for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt;= </span><span class="default">$num_lineas</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++) {<br />        </span><span class="default">$linea1 </span><span class="keyword">= </span><span class="default">$IDIOMA_CONTENT</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">];<br />        </span><span class="default">$linea1 </span><span class="keyword">= </span><span class="default">rtrim</span><span class="keyword">(</span><span class="default">$linea1</span><span class="keyword">);<br />        </span><span class="default">$string6 </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$linea1</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">6</span><span class="keyword">);<br /><br />        if (</span><span class="default">$string6 </span><span class="keyword">== </span><span class="string">"msgid "</span><span class="keyword">) {<br />            </span><span class="default">$orig </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="default">$string6</span><span class="keyword">, </span><span class="string">""</span><span class="keyword">, </span><span class="default">$linea1</span><span class="keyword">);<br />            </span><span class="default">$orig </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">"\""</span><span class="keyword">, </span><span class="string">""</span><span class="keyword">, </span><span class="default">$orig</span><span class="keyword">);<br />            <br />            if (</span><span class="string">"</span><span class="default">$orig</span><span class="string">" </span><span class="keyword">== </span><span class="string">"</span><span class="default">$contenido</span><span class="string">"</span><span class="keyword">) {<br />                </span><span class="default">$linea2 </span><span class="keyword">= </span><span class="default">$IDIOMA_CONTENT</span><span class="keyword">[</span><span class="default">$i </span><span class="keyword">+ </span><span class="default">1</span><span class="keyword">];<br />                </span><span class="default">$linea2 </span><span class="keyword">= </span><span class="default">rtrim</span><span class="keyword">(</span><span class="default">$linea2</span><span class="keyword">);<br />                </span><span class="default">$string7 </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$linea2</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">7</span><span class="keyword">);<br /><br />                if (</span><span class="default">$string7 </span><span class="keyword">== </span><span class="string">"msgstr "</span><span class="keyword">) {<br />                    </span><span class="default">$trad </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="default">$string7</span><span class="keyword">, </span><span class="string">""</span><span class="keyword">, </span><span class="default">$linea2</span><span class="keyword">);<br />                    </span><span class="default">$trad </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">"\""</span><span class="keyword">, </span><span class="string">""</span><span class="keyword">, </span><span class="default">$trad</span><span class="keyword">);<br />                    return(</span><span class="string">"</span><span class="default">$trad</span><span class="string">"</span><span class="keyword">);<br />                }<br />            } else {<br />                </span><span class="default">$i </span><span class="keyword">= </span><span class="default">$i </span><span class="keyword">+ </span><span class="default">3</span><span class="keyword">;<br />            }<br />        }<br />    }<br /><br />    return(</span><span class="string">"</span><span class="default">$contenido</span><span class="string">"</span><span class="keyword">);<br />}<br /><br /></span><span class="default">$language </span><span class="keyword">= </span><span class="string">"es"</span><span class="keyword">;<br /><br />print </span><span class="default">T_</span><span class="keyword">(</span><span class="string">"I on puc comprar el meu domini ?"</span><span class="keyword">);<br />print </span><span class="default">T_</span><span class="keyword">(</span><span class="string">"Aquí tens alguns links..."</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="122993">  <div class="votes">
    <div id="Vu122993">
    <a href="/manual/vote-note.php?id=122993&amp;page=book.gettext&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122993">
    <a href="/manual/vote-note.php?id=122993&amp;page=book.gettext&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122993" title="50% like this...">
    0
    </div>
  </div>
  <a href="#122993" class="name">
  <strong class="user"><em>maximran800 at gmail dot com</em></strong></a><a class="genanchor" href="#122993"> &para;</a><div class="date" title="2018-08-01 08:00"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122993">
<div class="phpcode"><code><span class="html">I have some problems setting geettext.<br />I ahve tried all the above example in noted, but none work.<br />However, i found a nice trick here and it work!!:<br />My platform is freebsd.<br /><br />below is the post:<br /><a href="http://php.net/manual/en/function.gettext.php" rel="nofollow" target="_blank">http://php.net/manual/en/function.gettext.php</a><br /><br />Gettext translations are cached. If you change *.mo files your page may not be translated as expected. Here's simple workaround which does not require restarting webserver (I know, this is just a dirty hack):<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">initialize_i18n</span><span class="keyword">(</span><span class="default">$locale</span><span class="keyword">) {<br />    </span><span class="default">putenv</span><span class="keyword">(</span><span class="string">'LANG='</span><span class="keyword">.</span><span class="default">$locale</span><span class="keyword">);<br />    </span><span class="default">setlocale</span><span class="keyword">(</span><span class="default">LC_ALL</span><span class="keyword">,</span><span class="string">""</span><span class="keyword">);<br />    </span><span class="default">setlocale</span><span class="keyword">(</span><span class="default">LC_MESSAGES</span><span class="keyword">,</span><span class="default">$locale</span><span class="keyword">);<br />    </span><span class="default">setlocale</span><span class="keyword">(</span><span class="default">LC_CTYPE</span><span class="keyword">,</span><span class="default">$locale</span><span class="keyword">);<br />    </span><span class="default">$domains </span><span class="keyword">= </span><span class="default">glob</span><span class="keyword">(</span><span class="default">$locales_root</span><span class="keyword">.</span><span class="string">'/'</span><span class="keyword">.</span><span class="default">$locale</span><span class="keyword">.</span><span class="string">'/LC_MESSAGES/messages-*.mo'</span><span class="keyword">);<br />    </span><span class="default">$current </span><span class="keyword">= </span><span class="default">basename</span><span class="keyword">(</span><span class="default">$domains</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">],</span><span class="string">'.mo'</span><span class="keyword">);<br />    </span><span class="default">$timestamp </span><span class="keyword">= </span><span class="default">preg_replace</span><span class="keyword">(</span><span class="string">'{messages-}i'</span><span class="keyword">,</span><span class="string">''</span><span class="keyword">,</span><span class="default">$current</span><span class="keyword">);<br />    </span><span class="default">bindtextdomain</span><span class="keyword">(</span><span class="default">$current</span><span class="keyword">,</span><span class="default">$locales_root</span><span class="keyword">);<br />    </span><span class="default">textdomain</span><span class="keyword">(</span><span class="default">$current</span><span class="keyword">);<br />    }<br /></span><span class="default">?&gt;<br /></span><br />to make this work you have to put your locale inside file messages-[unix_time].mo and use this name (without .mo) as your domain to fool caching mechanism (domain names differ)<br /><br />msgfmt messages.po -o messages-`date +%s`.mo<br /><br />for me this works fine (although this is not very elegant solution)</span></code></div>
  </div>
 </div>
  <div class="note" id="121805">  <div class="votes">
    <div id="Vu121805">
    <a href="/manual/vote-note.php?id=121805&amp;page=book.gettext&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121805">
    <a href="/manual/vote-note.php?id=121805&amp;page=book.gettext&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121805" title="50% like this...">
    0
    </div>
  </div>
  <a href="#121805" class="name">
  <strong class="user"><em>afrimuchkov at yandex dot ru</em></strong></a><a class="genanchor" href="#121805"> &para;</a><div class="date" title="2017-10-29 10:35"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom121805">
<div class="phpcode"><code><span class="html">Soo.... It was pretty hard)<br />Finaly:<br />1)Working if dir is "en", not "en_GB" or "en_GB.utf8". Only "en".<br />2)But use setlocale(LC_MESSAGES, "en_GB.utf8");</span></code></div>
  </div>
 </div>
  <div class="note" id="116346">  <div class="votes">
    <div id="Vu116346">
    <a href="/manual/vote-note.php?id=116346&amp;page=book.gettext&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116346">
    <a href="/manual/vote-note.php?id=116346&amp;page=book.gettext&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116346" title="42% like this...">
    -2
    </div>
  </div>
  <a href="#116346" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#116346"> &para;</a><div class="date" title="2014-12-16 12:00"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116346">
<div class="phpcode"><code><span class="html">for all they try to use a non-alpha-char in a domain name: DONT TRY THIS !!! we have search some hours to realized that "foo-bar" is not a good idea for a domain name. sometimes we got a correct translation, and sometimes not. so just use only the characters A-Z for a domain name!</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=book.gettext&amp;repo=en&amp;redirect=https://www.php.net/manual/en/book.gettext.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="refs.international.php">Human Language and Character Encoding Support</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="book.enchant.php" title="Enchant">Enchant</a>
                        </li>
                                                <li class="">
                            <a href="book.gender.php" title="Gender">Gender</a>
                        </li>
                                                <li class="current">
                            <a href="book.gettext.php" title="Gettext">Gettext</a>
                        </li>
                                                <li class="">
                            <a href="book.iconv.php" title="iconv">iconv</a>
                        </li>
                                                <li class="">
                            <a href="book.intl.php" title="intl">intl</a>
                        </li>
                                                <li class="">
                            <a href="book.mbstring.php" title="Multibyte String">Multibyte String</a>
                        </li>
                                                <li class="">
                            <a href="book.pspell.php" title="Pspell">Pspell</a>
                        </li>
                                                <li class="">
                            <a href="book.recode.php" title="Recode">Recode</a>
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
