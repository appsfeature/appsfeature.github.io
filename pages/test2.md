### BH Solution SDK Documentation

#### Introduction

The BH Solution SDK is a software development kit designed to facilitate seamless integration of payment functionalities into client applications. This documentation provides detailed instructions on how to incorporate the BH Solution SDK into your client application and utilize its features effectively.

#### Integration Steps

**Step 1: Add BH Solution SDK to Your Project**

Place the `BH-solution-sdk.aar` file in the `libs` folder of your Android project.

**Step 2: Implement Library in build.gradle**

Add the following lines to your `build.gradle` file (app module level):

```groovy
implementation 'com.google.code.gson:gson:2.9.0'
implementation fileTree(include: ['BH-solution-sdk.aar'], dir: 'libs')
```

Note: If your client application already uses the Gson library, there is no need to implement it again.

**Step 3: Utilize BH Solution SDK Methods**

The BH Solution SDK provides the following methods to initiate transactions:

```kotlin
fun doSale(activity: Activity, transactionId: String, amount: String, remoteAppID: String, callback: IbhTxnListener)

fun doVoid(activity: Activity, invoiceNo: String, remoteAppID: String, callback: IbhTxnListener)

fun getTxnStatus(activity: Activity, partnerTxnId : String, remoteAppID: String, callback: IbhTxnListener)

fun getPendingTxnList(activity: Activity, remoteAppID: String, callback: IbhTxnListener)

fun getAllTxnList(activity: Activity, remoteAppID: String, callback: IbhTxnListener)

fun doBQRTransaction(activity: Activity, amount: String, remoteAppID: String, callback: IbhTxnListener)

fun doUPICollect(activity: Activity, amount: String, remoteAppID: String, callback: IbhTxnListener)

fun doUPILink(activity: Activity, amount: String, remoteAppID: String, callback: IbhTxnListener)

fun doBhTxn(requestModel: SaleTxnRequestData, activity: Activity, callback: IbhTxnListener)

fun getVersion() : String

fun getMerchantInfo(activity: Activity, remoteAppID: String, callback: IbhTxnListener)
```

#### Callback Interface

The `IbhTxnListener` interface must be implemented to handle transaction responses. It includes two overridden methods:

```kotlin
fun onTxnSuccess(responseData: SaleTxnResponseData)
fun onTxnFail(errorMsg: String)
```

When a transaction is successful, the `onTxnSuccess` method is called, passing the `SaleTxnResponseData` object. If the transaction fails, the `onTxnFail` method is invoked with an error message.

#### SaleTxnResponseData Structure

The `SaleTxnResponseData` class represents the response data received upon a successful transaction. It includes the following fields:

```kotlin
String transactionId
String referenceNumber
String cardScheme
String cardNumber
String expirationDate
String acquirerId
String approvalCode
String responseMessage
String amount
String paymentType
String enteredDescription
String enteredVPA
String mTxnId
String partnerTxnId
String enteredMobileNumber
String pgwTxnId
String txnTid
String remoteAppID
String invoiceNo
String version
String versionRevId
MerchantInfoData merchantInfo
```

- `approvalCode`: Indicates the success status of the transaction (e.g., "00" for successful).
- `responseMessage`: Provides the status of the transaction or an error message.

#### Example Usage

```kotlin
BhTxnHandler.doSale(activity, transactionId, amount, remoteAppId, object : IbhTxnListener {

    override fun onTxnSuccess(responseData: SaleTxnResponseData) {
        // Handle successful transaction response
    }

    override fun onTxnFail(errorMsg: String) {
        // Handle transaction failure
    }
})
```

#### Conclusion

This documentation provides comprehensive guidelines for integrating and utilizing the BH Solution SDK in your client application. Ensure proper implementation of the SDK methods and handle transaction responses effectively using the provided callback interface.
