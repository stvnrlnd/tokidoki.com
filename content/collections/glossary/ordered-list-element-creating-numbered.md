---
id: e2b44e9c-2694-4c16-a3a3-37bb1102ad71
blueprint: html
title: 'OL Element: Creating Ordered Lists'
teaser: 'The ol HTML element is used to create an ordered list, where items are presented in a specific sequence, typically numbered or lettered. This is ideal for instructions, rankings, or any content where the order is significant.'
reference_title:
  code: '<ol>'
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
        text: '<ol>'
      -
        type: text
        text: ' HTML element is used to create an ordered list, which is a list of items that are presented in a specific sequence. Each item in an ordered list is typically preceded by a number or letter, indicating its position in the list. This element is useful when the order of items is important, such as in instructions, steps in a process, or ranked lists.'
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
        text: '<ol>'
      -
        type: text
        text: ' element contains one or more '
      -
        type: text
        marks:
          -
            type: code
        text: '<li>'
      -
        type: text
        text: ' (list item) elements, each representing an individual item in the list. By default, browsers display ordered lists with numbers, but this can be customized using CSS or by using the '
      -
        type: text
        marks:
          -
            type: code
        text: type
      -
        type: text
        text: ' attribute. Here is an example of how the '
      -
        type: text
        marks:
          -
            type: code
        text: '<ol>'
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
          <ol>
            <li>Preheat the oven to 350°F (175°C).</li>
            <li>Mix the flour and sugar in a bowl.</li>
            <li>Add the eggs and stir until smooth.</li>
            <li>Pour the mixture into a baking dish.</li>
            <li>Bake for 25 minutes.</li>
          </ol>
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
        text: '<ol>'
  -
    type: set
    attrs:
      id: m0ihdla0
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
              - type
              - 'Specifies the kind of marker to use in the list (e.g., 1 for numbers, A for uppercase letters, a for lowercase letters, I for uppercase Roman numerals, i for lowercase Roman numerals).'
          -
            cells:
              - start
              - 'Specifies the starting value of the list items. For example, start="5" will begin the list with the number 5.'
          -
            cells:
              - reversed
              - 'A Boolean attribute that indicates the list should be displayed in descending order.'
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
        text: '<ol>'
      -
        type: text
        text: ' element supports all global attributes, allowing for additional customization and interaction through CSS and JavaScript.'
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
                text: '<ol>'
              -
                type: text
                text: ' element provides semantic meaning by indicating that the order of items is significant, which is useful for both users and search engines.'
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
                text: ': Proper use of ordered lists enhances accessibility by providing a clear structure that is easily interpreted by screen readers and other assistive technologies.'
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
                text: 'Styling Flexibility'
              -
                type: text
                text: ': Ordered lists can be styled using CSS to change the appearance of the markers, such as using custom images or different numbering styles.'
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
        text: '<ol>'
      -
        type: text
        text: ' element is a fundamental part of HTML for creating ordered lists, which are essential for presenting items in a specific sequence. Its attributes provide flexibility for specifying the type and order of list markers, making it suitable for various applications where order is important. The '
      -
        type: text
        marks:
          -
            type: code
        text: '<ol>'
      -
        type: text
        text: ' element enhances both the readability and accessibility of web content.'
link: 'https://html.spec.whatwg.org/multipage/grouping-content.html#the-ol-element'
seo_noindex: false
seo_nofollow: false
seo_canonical_type: entry
sitemap_change_frequency: weekly
sitemap_priority: 0.5
tags:
  - html
comments_allowed: true
group: lists
updated_by: c00c8ed8-a262-4060-92e8-44c2c4931c51
updated_at: 1743366478
seo_title: 'HTML OL Element: Ordered Lists Explained'
seo_description: 'Learn about the ol HTML element for creating ordered lists, organizing content in a specific sequence with numbers or letters.'
og_title: 'Understanding the HTML OL Element'
og_description: 'Discover how the ol element in HTML is used to create ordered lists, providing a structured way to present items in a specific, numbered sequence.'
date: '2025-03-30'
---
