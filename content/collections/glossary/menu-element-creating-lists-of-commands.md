---
id: ac04fbac-4a63-45d7-9411-91e1b543ba18
blueprint: html
title: 'Menu Element: Defining Menu Lists (Obsolete)'
teaser: 'The menu HTML element was intended to define a list of commands or options, such as context menus or toolbars. However, its use is largely obsolete, and it is not widely supported in modern browsers.'
reference_title:
  code: '<menu>'
  mode: htmlmixed
article:
  -
    type: paragraph
    content:
      -
        type: text
        text: 'The '
      -
        type: text
        marks:
          -
            type: code
        text: '<menu>'
      -
        type: text
        text: ' HTML element is used to represent a list of commands or options that a user can perform or select. It is similar to the '
      -
        type: text
        marks:
          -
            type: code
        text: '<ul>'
      -
        type: text
        text: ' element, which represents an unordered list of items, but the '
      -
        type: text
        marks:
          -
            type: code
        text: '<menu>'
      -
        type: text
        text: ' element was originally intended to be used for interactive items, such as context menus or toolbars. However, its use has evolved over time, and it is now treated similarly to '
      -
        type: text
        marks:
          -
            type: code
        text: '<ul>'
      -
        type: text
        text: ' by browsers.'
  -
    type: heading
    attrs:
      level: 3
    content:
      -
        type: text
        text: 'Usage and Characteristics'
  -
    type: paragraph
    content:
      -
        type: text
        text: 'The '
      -
        type: text
        marks:
          -
            type: code
        text: '<menu>'
      -
        type: text
        text: ' element can contain '
      -
        type: text
        marks:
          -
            type: code
        text: '<li>'
      -
        type: text
        text: ' elements to define each item in the menu. While it was intended for interactive command lists, it is often functionally equivalent to '
      -
        type: text
        marks:
          -
            type: code
        text: '<ul>'
      -
        type: text
        text: ' in modern web development. Here is an example of how the '
      -
        type: text
        marks:
          -
            type: code
        text: '<menu>'
      -
        type: text
        text: ' tag can be used:'
  -
    type: codeBlock
    attrs:
      language: null
    content:
      -
        type: text
        text: |-
          <menu>
            <li><button onclick="copy()">Copy</button></li>
            <li><button onclick="cut()">Cut</button></li>
            <li><button onclick="paste()">Paste</button></li>
          </menu>
  -
    type: paragraph
    content:
      -
        type: text
        text: 'This example is functionally similar to using a '
      -
        type: text
        marks:
          -
            type: code
        text: '<ul>'
      -
        type: text
        text: ':'
  -
    type: codeBlock
    attrs:
      language: null
    content:
      -
        type: text
        text: |-
          <ul>
            <li><button onclick="copy()">Copy</button></li>
            <li><button onclick="cut()">Cut</button></li>
            <li><button onclick="paste()">Paste</button></li>
          </ul>
  -
    type: heading
    attrs:
      level: 3
    content:
      -
        type: text
        text: 'Valid Attributes for '
      -
        type: text
        marks:
          -
            type: code
        text: '<menu>'
  -
    type: paragraph
    content:
      -
        type: text
        text: 'The '
      -
        type: text
        marks:
          -
            type: code
        text: '<menu>'
      -
        type: text
        text: ' element supports global attributes and has a couple of specific attributes:'
  -
    type: set
    attrs:
      id: m0igkgen
      values:
        type: table
        size: md
        first_row_headers: true
        first_column_headers: true
        table:
          -
            cells:
              - Attribute
              - Description
          -
            cells:
              - label
              - 'Specifies a visible label for the menu.'
          -
            cells:
              - type
              - 'Specifies the type of menu to be displayed. Possible values include context, toolbar, and list.'
  -
    type: heading
    attrs:
      level: 3
    content:
      -
        type: text
        text: 'Benefits and Considerations'
  -
    type: bulletList
    content:
      -
        type: listItem
        content:
          -
            type: paragraph
            content:
              -
                type: text
                marks:
                  -
                    type: bold
                text: 'Semantic Meaning'
              -
                type: text
                text: ': The '
              -
                type: text
                marks:
                  -
                    type: code
                text: '<menu>'
              -
                type: text
                text: ' element was intended to provide semantic meaning for lists of commands, but its practical use is largely similar to '
              -
                type: text
                marks:
                  -
                    type: code
                text: '<ul>'
              -
                type: text
                text: .
      -
        type: listItem
        content:
          -
            type: paragraph
            content:
              -
                type: text
                marks:
                  -
                    type: bold
                text: 'Browser Support'
              -
                type: text
                text: ': The '
              -
                type: text
                marks:
                  -
                    type: code
                text: '<menu>'
              -
                type: text
                text: ' element is not widely used and is considered experimental, with varying levels of support across browsers. It was deprecated in HTML4 and reintroduced in HTML5, but it remains less common in practice.'
      -
        type: listItem
        content:
          -
            type: paragraph
            content:
              -
                type: text
                marks:
                  -
                    type: bold
                text: Accessibility
              -
                type: text
                text: ': Proper use of '
              -
                type: text
                marks:
                  -
                    type: code
                text: '<li>'
              -
                type: text
                text: ' elements within '
              -
                type: text
                marks:
                  -
                    type: code
                text: '<menu>'
              -
                type: text
                text: ' can enhance accessibility by providing a structured list of options or commands.'
  -
    type: paragraph
    content:
      -
        type: text
        text: 'In summary, the '
      -
        type: text
        marks:
          -
            type: code
        text: '<menu>'
      -
        type: text
        text: ' element is designed to represent a list of commands or options, similar to '
      -
        type: text
        marks:
          -
            type: code
        text: '<ul>'
      -
        type: text
        text: '. However, due to its limited browser support and the availability of other more widely supported elements, it is not commonly used in modern web development. Developers often use '
      -
        type: text
        marks:
          -
            type: code
        text: '<ul>'
      -
        type: text
        text: ' for similar purposes, especially when creating navigation menus or lists of interactive items.'
link: 'https://html.spec.whatwg.org/multipage/grouping-content.html#the-menu-element'
seo_noindex: false
seo_nofollow: false
seo_canonical_type: entry
sitemap_change_frequency: weekly
sitemap_priority: 0.5
tags:
  - html
comments_allowed: true
group: obsolete_and_depricated
updated_by: c00c8ed8-a262-4060-92e8-44c2c4931c51
updated_at: 1743366382
seo_title: 'HTML Menu Element: Command Lists Explained'
seo_description: 'Explore the menu HTML element for defining command lists and menus, though its usage is largely obsolete and unsupported.'
og_title: 'Understanding the HTML Menu Element'
og_description: 'Learn about the menu element in HTML, designed for creating command lists and menus, but note its current obsolescence and limited browser support.'
date: '2025-03-30'
---
