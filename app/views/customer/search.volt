<div class="row">
    <nav>
        <ul class="pager">
            <li class="previous">{{ link_to("customer/index", "Go Back") }}</li>
            <li class="next">{{ link_to("customer/new", "Create ") }}</li>
        </ul>
    </nav>
</div>

<div class="page-header">
    <h1>Search result</h1>
</div>

{{ content() }}

<div class="row">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ListID</th>
            <th>TimeCreated</th>
            <th>TimeModified</th>
            <th>EditSequence</th>
            <th>Name</th>
            <th>FullName</th>
            <th>IsActive</th>
            <th>ClassRef Of ListID</th>
            <th>ClassRef Of FullName</th>
            <th>ParentRef Of ListID</th>
            <th>ParentRef Of FullName</th>
            <th>Sublevel</th>
            <th>CompanyName</th>
            <th>Salutation</th>
            <th>FirstName</th>
            <th>MiddleName</th>
            <th>LastName</th>
            <th>Suffix</th>
            <th>BillAddress Of Addr1</th>
            <th>BillAddress Of Addr2</th>
            <th>BillAddress Of Addr3</th>
            <th>BillAddress Of Addr4</th>
            <th>BillAddress Of Addr5</th>
            <th>BillAddress Of City</th>
            <th>BillAddress Of State</th>
            <th>BillAddress Of PostalCode</th>
            <th>BillAddress Of Country</th>
            <th>BillAddress Of Note</th>
            <th>ShipAddress Of Addr1</th>
            <th>ShipAddress Of Addr2</th>
            <th>ShipAddress Of Addr3</th>
            <th>ShipAddress Of Addr4</th>
            <th>ShipAddress Of Addr5</th>
            <th>ShipAddress Of City</th>
            <th>ShipAddress Of State</th>
            <th>ShipAddress Of PostalCode</th>
            <th>ShipAddress Of Country</th>
            <th>ShipAddress Of Note</th>
            <th>PrintAs</th>
            <th>Phone</th>
            <th>Mobile</th>
            <th>Pager</th>
            <th>AltPhone</th>
            <th>Fax</th>
            <th>Email</th>
            <th>Cc</th>
            <th>Contact</th>
            <th>AltContact</th>
            <th>CustomerTypeRef Of ListID</th>
            <th>CustomerTypeRef Of FullName</th>
            <th>TermsRef Of ListID</th>
            <th>TermsRef Of FullName</th>
            <th>SalesRepRef Of ListID</th>
            <th>SalesRepRef Of FullName</th>
            <th>Balance</th>
            <th>TotalBalance</th>
            <th>SalesTaxCodeRef Of ListID</th>
            <th>SalesTaxCodeRef Of FullName</th>
            <th>ItemSalesTaxRef Of ListID</th>
            <th>ItemSalesTaxRef Of FullName</th>
            <th>SalesTaxCountry</th>
            <th>ResaleNumber</th>
            <th>AccountNumber</th>
            <th>CreditLimit</th>
            <th>PreferredPaymentMethodRef Of ListID</th>
            <th>PreferredPaymentMethodRef Of FullName</th>
            <th>CreditCardNumber</th>
            <th>ExpirationMonth</th>
            <th>ExpirationYear</th>
            <th>NameOnCard</th>
            <th>CreditCardAddress</th>
            <th>CreditCardPostalCode</th>
            <th>JobStatus</th>
            <th>JobStartDate</th>
            <th>JobProjectedEndDate</th>
            <th>JobEndDate</th>
            <th>JobDesc</th>
            <th>JobTypeRef Of ListID</th>
            <th>JobTypeRef Of FullName</th>
            <th>Notes</th>
            <th>PriceLevelRef Of ListID</th>
            <th>PriceLevelRef Of FullName</th>
            <th>TaxRegistrationNumber</th>
            <th>CurrencyRef Of ListID</th>
            <th>CurrencyRef Of FullName</th>
            <th>IsStatementWithParent</th>
            <th>PreferredDeliveryMethod</th>
            <th>CustomField1</th>
            <th>CustomField2</th>
            <th>CustomField3</th>
            <th>CustomField4</th>
            <th>CustomField5</th>
            <th>CustomField6</th>
            <th>CustomField7</th>
            <th>CustomField8</th>
            <th>CustomField9</th>
            <th>CustomField10</th>
            <th>CustomField11</th>
            <th>CustomField12</th>
            <th>CustomField13</th>
            <th>CustomField14</th>
            <th>CustomField15</th>
            <th>Status</th>

                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        {% if page.items is defined %}
        {% for customer in page.items %}
            <tr>
                <td>{{ customer.getListid() }}</td>
            <td>{{ customer.getTimecreated() }}</td>
            <td>{{ customer.getTimemodified() }}</td>
            <td>{{ customer.getEditsequence() }}</td>
            <td>{{ customer.getName() }}</td>
            <td>{{ customer.getFullname() }}</td>
            <td>{{ customer.getIsactive() }}</td>
            <td>{{ customer.getClassrefListid() }}</td>
            <td>{{ customer.getClassrefFullname() }}</td>
            <td>{{ customer.getParentrefListid() }}</td>
            <td>{{ customer.getParentrefFullname() }}</td>
            <td>{{ customer.getSublevel() }}</td>
            <td>{{ customer.getCompanyname() }}</td>
            <td>{{ customer.getSalutation() }}</td>
            <td>{{ customer.getFirstname() }}</td>
            <td>{{ customer.getMiddlename() }}</td>
            <td>{{ customer.getLastname() }}</td>
            <td>{{ customer.getSuffix() }}</td>
            <td>{{ customer.getBilladdressAddr1() }}</td>
            <td>{{ customer.getBilladdressAddr2() }}</td>
            <td>{{ customer.getBilladdressAddr3() }}</td>
            <td>{{ customer.getBilladdressAddr4() }}</td>
            <td>{{ customer.getBilladdressAddr5() }}</td>
            <td>{{ customer.getBilladdressCity() }}</td>
            <td>{{ customer.getBilladdressState() }}</td>
            <td>{{ customer.getBilladdressPostalcode() }}</td>
            <td>{{ customer.getBilladdressCountry() }}</td>
            <td>{{ customer.getBilladdressNote() }}</td>
            <td>{{ customer.getShipaddressAddr1() }}</td>
            <td>{{ customer.getShipaddressAddr2() }}</td>
            <td>{{ customer.getShipaddressAddr3() }}</td>
            <td>{{ customer.getShipaddressAddr4() }}</td>
            <td>{{ customer.getShipaddressAddr5() }}</td>
            <td>{{ customer.getShipaddressCity() }}</td>
            <td>{{ customer.getShipaddressState() }}</td>
            <td>{{ customer.getShipaddressPostalcode() }}</td>
            <td>{{ customer.getShipaddressCountry() }}</td>
            <td>{{ customer.getShipaddressNote() }}</td>
            <td>{{ customer.getPrintas() }}</td>
            <td>{{ customer.getPhone() }}</td>
            <td>{{ customer.getMobile() }}</td>
            <td>{{ customer.getPager() }}</td>
            <td>{{ customer.getAltphone() }}</td>
            <td>{{ customer.getFax() }}</td>
            <td>{{ customer.getEmail() }}</td>
            <td>{{ customer.getCc() }}</td>
            <td>{{ customer.getContact() }}</td>
            <td>{{ customer.getAltcontact() }}</td>
            <td>{{ customer.getCustomertyperefListid() }}</td>
            <td>{{ customer.getCustomertyperefFullname() }}</td>
            <td>{{ customer.getTermsrefListid() }}</td>
            <td>{{ customer.getTermsrefFullname() }}</td>
            <td>{{ customer.getSalesreprefListid() }}</td>
            <td>{{ customer.getSalesreprefFullname() }}</td>
            <td>{{ customer.getBalance() }}</td>
            <td>{{ customer.getTotalbalance() }}</td>
            <td>{{ customer.getSalestaxcoderefListid() }}</td>
            <td>{{ customer.getSalestaxcoderefFullname() }}</td>
            <td>{{ customer.getItemsalestaxrefListid() }}</td>
            <td>{{ customer.getItemsalestaxrefFullname() }}</td>
            <td>{{ customer.getSalestaxcountry() }}</td>
            <td>{{ customer.getResalenumber() }}</td>
            <td>{{ customer.getAccountnumber() }}</td>
            <td>{{ customer.getCreditlimit() }}</td>
            <td>{{ customer.getPreferredpaymentmethodrefListid() }}</td>
            <td>{{ customer.getPreferredpaymentmethodrefFullname() }}</td>
            <td>{{ customer.getCreditcardnumber() }}</td>
            <td>{{ customer.getExpirationmonth() }}</td>
            <td>{{ customer.getExpirationyear() }}</td>
            <td>{{ customer.getNameoncard() }}</td>
            <td>{{ customer.getCreditcardaddress() }}</td>
            <td>{{ customer.getCreditcardpostalcode() }}</td>
            <td>{{ customer.getJobstatus() }}</td>
            <td>{{ customer.getJobstartdate() }}</td>
            <td>{{ customer.getJobprojectedenddate() }}</td>
            <td>{{ customer.getJobenddate() }}</td>
            <td>{{ customer.getJobdesc() }}</td>
            <td>{{ customer.getJobtyperefListid() }}</td>
            <td>{{ customer.getJobtyperefFullname() }}</td>
            <td>{{ customer.getNotes() }}</td>
            <td>{{ customer.getPricelevelrefListid() }}</td>
            <td>{{ customer.getPricelevelrefFullname() }}</td>
            <td>{{ customer.getTaxregistrationnumber() }}</td>
            <td>{{ customer.getCurrencyrefListid() }}</td>
            <td>{{ customer.getCurrencyrefFullname() }}</td>
            <td>{{ customer.getIsstatementwithparent() }}</td>
            <td>{{ customer.getPreferreddeliverymethod() }}</td>
            <td>{{ customer.getCustomfield1() }}</td>
            <td>{{ customer.getCustomfield2() }}</td>
            <td>{{ customer.getCustomfield3() }}</td>
            <td>{{ customer.getCustomfield4() }}</td>
            <td>{{ customer.getCustomfield5() }}</td>
            <td>{{ customer.getCustomfield6() }}</td>
            <td>{{ customer.getCustomfield7() }}</td>
            <td>{{ customer.getCustomfield8() }}</td>
            <td>{{ customer.getCustomfield9() }}</td>
            <td>{{ customer.getCustomfield10() }}</td>
            <td>{{ customer.getCustomfield11() }}</td>
            <td>{{ customer.getCustomfield12() }}</td>
            <td>{{ customer.getCustomfield13() }}</td>
            <td>{{ customer.getCustomfield14() }}</td>
            <td>{{ customer.getCustomfield15() }}</td>
            <td>{{ customer.getStatus() }}</td>

                <td>{{ link_to("customer/edit/"~customer.getListid(), "Edit") }}</td>
                <td>{{ link_to("customer/delete/"~customer.getListid(), "Delete") }}</td>
            </tr>
        {% endfor %}
        {% endif %}
        </tbody>
    </table>
</div>

<div class="row">
    <div class="col-sm-1">
        <p class="pagination" style="line-height: 1.42857;padding: 6px 12px;">
            {{ page.current~"/"~page.total_pages }}
        </p>
    </div>
    <div class="col-sm-11">
        <nav>
            <ul class="pagination">
                <li>{{ link_to("customer/search", "First") }}</li>
                <li>{{ link_to("customer/search?page="~page.before, "Previous") }}</li>
                <li>{{ link_to("customer/search?page="~page.next, "Next") }}</li>
                <li>{{ link_to("customer/search?page="~page.last, "Last") }}</li>
            </ul>
        </nav>
    </div>
</div>
