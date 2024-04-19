**Android Methods Documentation**

---

### 1. `fun doSale(activity: Activity, transactionId: String, amount: String, remoteAppID: String, callback: IbhTxnListener)`

This method initiates a sale transaction.

- **Parameters:**
  - `activity`: The activity context where the transaction is initiated.
  - `transactionId`: Unique identifier for the transaction.
  - `amount`: Amount of the transaction.
  - `remoteAppID`: Identifier for the remote application.
  - `callback`: Listener for transaction events.

---

### 2. `fun doVoid(activity: Activity, invoiceNo: String, remoteAppID: String, callback: IbhTxnListener)`

This method initiates a void transaction.

- **Parameters:**
  - `activity`: The activity context where the void transaction is initiated.
  - `invoiceNo`: Invoice number for the transaction to be voided.
  - `remoteAppID`: Identifier for the remote application.
  - `callback`: Listener for transaction events.

---

### 3. `fun getTxnStatus(activity: Activity, partnerTxnId: String, remoteAppID: String, callback: IbhTxnListener)`

This method retrieves the status of a transaction.

- **Parameters:**
  - `activity`: The activity context where the status retrieval is initiated.
  - `partnerTxnId`: Partner transaction ID to identify the transaction.
  - `remoteAppID`: Identifier for the remote application.
  - `callback`: Listener for transaction events.

---

### 4. `fun getPendingTxnList(activity: Activity, remoteAppID: String, callback: IbhTxnListener)`

This method retrieves a list of pending transactions.

- **Parameters:**
  - `activity`: The activity context where the retrieval is initiated.
  - `remoteAppID`: Identifier for the remote application.
  - `callback`: Listener for transaction events.

---

### 5. `fun getAllTxnList(activity: Activity, remoteAppID: String, callback: IbhTxnListener)`

This method retrieves a list of all transactions.

- **Parameters:**
  - `activity`: The activity context where the retrieval is initiated.
  - `remoteAppID`: Identifier for the remote application.
  - `callback`: Listener for transaction events.

---

### 6. `fun doBQRTransaction(activity: Activity, amount: String, remoteAppID: String, callback: IbhTxnListener)`

This method initiates a BQR (Bar QR) transaction.

- **Parameters:**
  - `activity`: The activity context where the BQR transaction is initiated.
  - `amount`: Amount of the BQR transaction.
  - `remoteAppID`: Identifier for the remote application.
  - `callback`: Listener for transaction events.

---

### 7. `fun doUPICollect(activity: Activity, amount: String, remoteAppID: String, callback: IbhTxnListener)`

This method initiates a UPI (Unified Payments Interface) collect transaction.

- **Parameters:**
  - `activity`: The activity context where the UPI collect transaction is initiated.
  - `amount`: Amount of the UPI collect transaction.
  - `remoteAppID`: Identifier for the remote application.
  - `callback`: Listener for transaction events.

---

### 8. `fun doUPILink(activity: Activity, amount: String, remoteAppID: String, callback: IbhTxnListener)`

This method initiates a UPI link transaction.

- **Parameters:**
  - `activity`: The activity context where the UPI link transaction is initiated.
  - `amount`: Amount of the UPI link transaction.
  - `remoteAppID`: Identifier for the remote application.
  - `callback`: Listener for transaction events.

---

### 9. `fun doBhTxn(requestModel: SaleTxnRequestData, activity: Activity, callback: IbhTxnListener)`

This method initiates a transaction with a custom request model.

- **Parameters:**
  - `requestModel`: Custom model containing transaction data.
  - `activity`: The activity context where the transaction is initiated.
  - `callback`: Listener for transaction events.

---

### 10. `fun getVersion(): String`

This method retrieves the version of the application.

- **Returns:**
  - `String`: The version of the application.

---

### 11. `fun getMerchantInfo(activity: Activity, remoteAppID: String, callback: IbhTxnListener)`

This method retrieves information about the merchant.

- **Parameters:**
  - `activity`: The activity context where the retrieval is initiated.
  - `remoteAppID`: Identifier for the remote application.
  - `callback`: Listener for transaction events.

---

This documentation provides an overview of the available methods along with their parameters and purposes. Each method serves a specific function related to transactions and information retrieval within the application.
