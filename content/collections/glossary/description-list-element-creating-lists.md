---
id: b18c7f2d-3011-48b9-baf9-ee32a2bdc4ee
blueprint: html
title: 'DL Element: Structuring Description Lists'
teaser: 'The dl HTML element is used to create a description list, containing pairs of terms and descriptions, often used for glossaries or metadata.'
reference_title:
  code: '<dl>'
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
        text: '<dl>'
      -
        type: text
        text: ' HTML element is used to create a description list, which is a structured list of terms and their corresponding descriptions. This element is particularly useful for presenting data where each term needs to be associated with a description, such as glossaries, FAQs, or metadata about a subject. The '
      -
        type: text
        marks:
          -
            type: code
        text: '<dl>'
      -
        type: text
        text: " element provides a semantic way to group related terms and descriptions, enhancing the document's readability and accessibility."
  -
    type: paragraph
    content:
      -
        type: text
        text: 'A description list consists of '
      -
        type: text
        marks:
          -
            type: code
        text: '<dt>'
      -
        type: text
        text: ' (description term) elements and '
      -
        type: text
        marks:
          -
            type: code
        text: '<dd>'
      -
        type: text
        text: ' (description details) elements. The '
      -
        type: text
        marks:
          -
            type: code
        text: '<dt>'
      -
        type: text
        text: ' element represents the term or name, while the '
      -
        type: text
        marks:
          -
            type: code
        text: '<dd>'
      -
        type: text
        text: ' element provides the description or definition for that term. These elements are children of the '
      -
        type: text
        marks:
          -
            type: code
        text: '<dl>'
      -
        type: text
        text: ' element, and they can be used in any combination to create a list of terms and definitions. Here is an example of how the '
      -
        type: text
        marks:
          -
            type: code
        text: '<dl>'
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
          <dl>
            <dt>HTML</dt>
            <dd>Hypertext Markup Language, the standard language for creating web pages.</dd>
            <dt>CSS</dt>
            <dd>Cascading Style Sheets, used for styling the appearance of web pages.</dd>
            <dt>JavaScript</dt>
            <dd>A programming language that enables interactive web pages.</dd>
          </dl>
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
        text: '<dl>'
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
        text: '<dl>'
      -
        type: text
        text: ' element does not have specific attributes beyond the global attributes, which include:'
  -
    type: set
    attrs:
      id: m0h5lkii
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
              - class
              - 'Specifies one or more class names for the element, used for CSS styling.'
          -
            cells:
              - id
              - 'Defines a unique identifier for the element, useful for linking and JavaScript.'
          -
            cells:
              - style
              - 'Contains inline CSS styles for the element.'
          -
            cells:
              - title
              - 'Provides additional information about the element, often displayed as a tooltip.'
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
        text: '<dl>'
      -
        type: text
        text: ' element is a fundamental part of HTML for creating description lists, providing a clear and semantic structure for pairing terms with their descriptions. It is widely used in contexts where terms need to be defined or explained, offering a straightforward way to organize and present related information.'
link: 'https://html.spec.whatwg.org/multipage/grouping-content.html#the-dl-element'
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
updated_at: 1743365122
seo_title: 'HTML DL Element: Description Lists Explained'
seo_description: 'Explore the dl HTML element for creating structured lists of terms and descriptions.'
og_title: 'Understanding the HTML DL Element'
og_description: 'Learn how the dl element in HTML is used to structure description lists, pairing terms with their corresponding descriptions for organized content.'
date: '2025-03-30'
---
